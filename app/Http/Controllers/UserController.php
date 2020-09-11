<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\UserService;
use Str;
use DB;
use App\User;
use Image;
use File;

class UserController extends Controller
{
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    function register()
    {
        return view('login.register');
    }

    //buscar user
    public function searchUserById()
    {
        $response = $this->userService->searchUserById(auth()->user()->id);

        if($response['status'] == 'success')
            return response()->json(['status'=>'success', 'data'=>$response['data']], 201);
            
        return response()->json(['status'=>'error', 'message'=>$response['data']], 500);
    }

    //editar user
    public function editUser(Request $request)
    {

        $data = [
            'id' => $request->id,
            'name' => trim($request->name) ,
            'city' => trim($request->city),
            'state' => trim($request->state),
            'latitude' => trim($request->latitude),
            'longitude' => trim($request->longitude),
            'bio' => trim($request->bio),
        ];

        $response = $this->userService->editUser($data);

        if($response['status'] == 'success')
            return response()->json(['status'=>'success'], 201);

        return response()->json(['status'=>'error', 'message'=>$response['data']], 201);
    }

    //editar user
    public function editUrl(Request $request)
    {
        $url = Str::kebab(trim($request->url_name));

        $user = DB::select( DB::raw("select * from users where url_name = '".$url."' and id != ".$request->id.""));

        if(count($user) > 0)
            return response()->json(['status'=>'error', 'message'=>'A URL "'.$url.'" já pertence à outro usuário!'], 201);

        $data = [
            'id' => $request->id,
            'url_name' => $url ,
        ];

        $response = $this->userService->editUrl($data);

        if($response['status'] == 'success')
            return response()->json(['status'=>'success'], 201);

        return response()->json(['status'=>'error', 'message'=>$response['data']], 201);
    }

    //editar user
    public function editPass(Request $request)
    {

        $data = [
            'id' => $request->id,
            'password' => bcrypt(trim($request->password)),
        ];

        $response = $this->userService->editPass($data);

        if($response['status'] == 'success')
            return response()->json(['status'=>'success'], 201);

        return response()->json(['status'=>'error', 'message'=>$response['data']], 201);
    }

    //adicionar user
    public function addUser(Request $request)
    {

        $find_user = User::where('email', $request->email)->first();

        if($find_user)
            return response()->json(['status'=>'error', 'message'=>'Visshh! Parece que alguém já está usando esse email :('], 201);
            
        $url = Str::kebab(trim($request->name));

        $user = DB::select( DB::raw("select * from users where url_name = '".$url."'"));

        if(count($user) > 0)
            return response()->json(['status'=>'error', 'message'=>'A URL "'.$url.'" já pertence à outro usuário! Tente colocar outro nome!'], 201);


        $data = [
            'name' => trim($request->name),
            'url_name' => $url,
            'email' => trim($request->email) ,
            'password' => bcrypt(trim($request->password)),
            'avatar' => null,
            'bio' => null,
            'city' => null,
            'phone' => null,
            'id_theme' => null,
            'is_root' => 0,
            'is_admin' => 1,
            'id_admin' => null
        ];

        $response = $this->userService->addUser($data);

        $credentials = array('email' => $request->email, 'password' => $request->password);
        auth()->attempt($credentials);

        // $msg = $request->name." acabou de se cadastrar!";
        // file_get_contents('https://api.telegram.org/bot1366316005:AAHoexLlhQeRJ5OJEAWPF_dj1dmaSUb1iEc/sendMessage?chat_id=-1001312472436&text='.$msg.'');

        if($response['status'] == 'success')
            return response()->json(['status'=>'success'], 201);

        return response()->json(['status'=>'error', 'message'=>$response['data']], 201);
    }


    public function uploadImage(Request $request){
    	$arr = [];
		if($request->hasFile('file')) {
			list($width, $height) = getimagesize($request->file);
			$arr['width'] = $width;
			$arr['height'] = $height;
			$arr['file'] = $request->file->getClientOriginalName();
			if($width > 1000) {
				Image::make($request->file->getRealPath())->resize(1000,null, function($constraint){
					$constraint->aspectRatio();
				})->save(public_path('uploads/'.$arr['file']));
				$arr['width'] = 1000;
			}
			else {
				Image::make($request->file->getRealPath())->save(public_path('uploads/'.$arr['file']));
			}
		}
		else {
			$arr['error'] = "No Image Uploaded";

		}
		echo json_encode($arr);
    }

    public function saveCroppedImage(Request $request){
        // Get The Necessary inputs
    	$cin_crop_width = $request->w;
    	$cin_crop_height = $request->h;
    	$cin_crop_x_axis = $request->x;
    	$cin_crop_y_axis = $request->y;
        $image_name = $request->file;
        
        $ext = File::extension($image_name);

        if($ext == 'jpg' || $ext == 'jpeg'){

            // If you want to create a jpeg image
            header('Content-type: image/jpeg');
            $jpeg_image_quality = 90;
            $source_image = public_path('uploads/'.$image_name);
            $cin_new_image = imagecreatefromjpeg($source_image);
            $cin_new_image_mirror = ImageCreateTrueColor( $cin_crop_width, $cin_crop_height );
            imagecopyresampled($cin_new_image_mirror,$cin_new_image,0,0,$cin_crop_x_axis,$cin_crop_y_axis,$cin_crop_width, $cin_crop_height, $cin_crop_width, $cin_crop_height);
            $destination = public_path('uploads/'."cropped_".$image_name);
            imagejpeg($cin_new_image_mirror, $destination, $jpeg_image_quality);
        
        }else if($ext == 'png'){

            //If you want to create a png image
            header('Content-type: image/png');
            $source_image = public_path('uploads/'.$image_name);
            $cin_new_image = imagecreatefrompng($source_image);
            $cin_new_image_mirror = ImageCreateTrueColor( $cin_crop_width, $cin_crop_height );
            imagesavealpha($cin_new_image_mirror, TRUE);
            $empty = imagecolorallocatealpha($cin_new_image_mirror,0x00,0x00,0x00,127);
            imagefill($cin_new_image_mirror, 0, 0, $empty);
            imagecopyresampled($cin_new_image_mirror,$cin_new_image,0,0,$cin_crop_x_axis,$cin_crop_y_axis,$cin_crop_width, $cin_crop_height, $cin_crop_width, $cin_crop_height);
            $destination = public_path('uploads/'."cropped_".$image_name);
            imagepng($cin_new_image_mirror, $destination);
        
        }else{
            echo "Formato não suportado";
        }


    }



}