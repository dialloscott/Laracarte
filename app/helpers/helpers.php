<?php

function setActive(string $path){
	return Route::current()->getName() == $path ? 'active' : '';
}