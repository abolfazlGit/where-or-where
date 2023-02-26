<?php

//where in laravel

//where های تکی

where('id', 2);



//where های چند گانه
where('id', 1) -> where('name', 'abolfazl');



//where های تو در تو
where([

    ['name', 'abolfazl'],
    ['name', 'hasan'],
    ['name', 'mahdi'],

])