<?php

 use App\Models\Services;
function get_services(){
	return Services::where('active',true)->get();
}