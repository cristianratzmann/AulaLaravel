<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App;



class PopularTabela extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:popular';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Preenche as tabelas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        
        $produto = new App\Produto();
        $produto->nompro = "Toalha";
        $produto->despro = "Para se secar";
        $produto->vlrpro = 99.99;
        $produto->codcat = 1;
        $produto->save();
        
        $produto = new App\Produto();
        $produto->nompro = "Teclado Gamer";
        $produto->despro = "Bom para jogos";
        $produto->vlrpro = 300.00;
        $produto->codcat = 2;
        $produto->save();
        
        $produto = new App\Produto();
        $produto->nompro = "Microondas";
        $produto->despro = "Para esquentar comida";
        $produto->vlrpro = 300.00;
        $produto->codcat = 3;
        $produto->save();
        
        $produto = new App\Produto();  
        $produto->nompro = "Chave de fenda";
        $produto->despro = "Para apertar parafusos";
        $produto->vlrpro = 20.50;
        $produto->codcat = 4;
        $produto->save();
        
        
        
        
    }
}
