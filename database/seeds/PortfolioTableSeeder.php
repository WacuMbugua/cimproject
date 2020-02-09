<?php

use App\portfolio;
use Illuminate\Database\Seeder;

class PortfolioTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $portfolio_item = new Portfolio;
        $portfolio_item->name = 'CMMF';
        $portfolio_item->description = 'money market instrument';
        $portfolio_item->yield = '11.1';
        $portfolio_item->save();

        $portfolio_item = new Portfolio;
        $portfolio_item->name = 'CHYF';
        $portfolio_item->description = 'cash management';
        $portfolio_item->yield = '16.1';
        $portfolio_item->save();

        $portfolio_item = new Portfolio;
        $portfolio_item->name = 'CHYS';
        $portfolio_item->description = 'cash management';
        $portfolio_item->yield = '18.1';
        $portfolio_item->save();

        $portfolio_item = new Portfolio;
        $portfolio_item->name = 'CAML';
        $portfolio_item->description = 'asset management';
        $portfolio_item->yield = '11.1';
        $portfolio_item->save();
       
    }
}
