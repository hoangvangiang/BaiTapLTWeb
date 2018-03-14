<?php

//Cau a:
echo ("Ngay da nhap: ");
echo date("d/m/Y")."<br>";
echo ("Cau a: ");
$new = str_replace("/", "-", date("d/m/y"));
echo $new;



