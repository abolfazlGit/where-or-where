<?php

//where in laravel

//where های تکی

where('id', 2);



//where های چند گانه
where('id', 1) -> where('name', 'abolfazl');



//where های تو چند عددی
where([

    ['name', 'abolfazl'],
    ['name', 'hasan'],
    ['name', 'mahdi'],

])
    
    
    //where های بازه ای
whereBetween('id' , [1,10]);
//شان از 1 تا 10 است را انتخاب کن id آن هایی که



whereNotBetween('id' , [1,10]);
//شان از 1 تا 10 نیست را انتخاب کن id آن هایی که


/////////////////////////////////////////////////////////////////////
whereIn('id' , [10,2,5]);
//شان 10 و 2 و 5 است را انتخاب کن id آن هایی که 





whereNull('email');
//شان خالی است email آن هایی که ستون 


whereNotNull('email');
//شان خالی نیست email آن هایی که ستون




whereColumn('email' , 'name');
//شان یکی است name شان با ستون  email آن هایی که ستون ستون
