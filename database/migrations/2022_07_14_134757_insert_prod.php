<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $cat = new \App\Models\Category(['name' => 'Geral']);
        $cat->save();

        $prod = new \App\Models\Products(['name'=> 'Drone Dj Mavic ProII', 'value'=> '1000','photo'=> '/storage/images/produtos/drone.jpg', 'description'=>'Drone Dj Mavic ProII', 'id_category'=>$cat->id]);
        $prod->save();

        $prod2= new \App\Models\Products(['name'=> 'Mouse Gamer', 'value'=> '70','photo'=> '/storage/images/produtos/mouse-gamer.jpg', 'description'=>'Mouse Gamer', 'id_category'=>$cat->id]);
        $prod2->save();

        $prod3 = new \App\Models\Products(['name'=> 'Notebook Samsung', 'value'=> '3000','photo'=> '/storage/images/produtos/not-samsung.jpg', 'description'=>'Notebook Samsung', 'id_category'=>$cat->id]);
        $prod3->save();

        $prod4 = new \App\Models\Products(['name'=> 'Monitor Samsung', 'value'=> '4000','photo'=> '/storage/images/produtos/monitor-samsung.jpg', 'description'=>'Monitor Samsung Odissey G5', 'id_category'=>$cat->id]);
        $prod4->save();

           
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
