<?php

use App\Src\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Category::class, 100)->create();

        $categories = Category::all();

        $categories->map(function($cat, $index) use($categories) {
            if ($index > 5 && $index < 25) {
                $cat->parent_id = rand(1, 6);
                $cat->save();
            }

            if ($index > 24 ) {
                $cat->parent_id = $categories->random()->id;
                $cat->save();
            }
        });

        
        //dd($this->getCategoryTree());
    }

    /* protected function getCategoryTree($level = 0, $prefix = '') {
        $rows = DB::select(['id,parent_id,name'])
            ->where('parent_id', $level)
            //->order_by(['id','asc'])
            ->get();
        dd($rows);
        $category = '';
        if (count($rows) > 0) {
            foreach ($rows as $row) {
                $category .= $prefix . $row->name . "\n";
                // Append subcategories
                $category .= $this->getCategoryTree($row->id, $prefix . '-');
            }
        }
        return $category;
    } */
}
