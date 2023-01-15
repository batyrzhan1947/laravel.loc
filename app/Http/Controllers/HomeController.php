<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

class HomeController extends Controller
{



    public function index()
    {


        $data = Country::where('Code','<','ALB')->select('Code','Name')->get();
        dd($data);
     return view('home');
    }

    public function updateTableData()
    {

        DB::beginTransaction();

        try {
            DB::update("Update posts SET created_at=? where created_at is null", [now()]);
            DB::update("Update posts3 SET updated_at=? where updated_at is null", [now()]);

            DB::commit();
            echo "Data updated";
        } catch (\Exception $e) {
            DB::rollBack();
            echo $e->getMessage();
            $log = str_replace(array('	', PHP_EOL), '', print_r($e->getMessage(), true));
            file_put_contents('../log.txt', $log . PHP_EOL, FILE_APPEND);
        }
    }


    public function deleteDataFromTable()
    {



        if (!empty($_POST['id'])) {
            $id = $_POST['id'];

            DB::delete("DELETE FROM posts where id=?", [$id]);
            echo "<br>Data deleted with id = $id";
            header('Location: http://laravel.loc/');
        }

        return view('delete');
    }
}
