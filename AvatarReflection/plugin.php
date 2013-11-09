<?php
// Copyright 2013 ciruz
if (!defined("IN_ESOTALK")) exit;

ET::$pluginInfo["AvatarReflection"] = array(
	"name" => "Avatar Reflection",
	"description" => "Adds a reflection effect underneath user avatars.",
	"version" => "0.1",
	"author" => "ciruz",
	"authorEmail" => "me@ciruz.net",
	"authorURL" => "http://www.ciruz.net",
	"license" => "MIT"
);

class ETPlugin_AvatarReflection extends ETPlugin{

	public function handler_init(){
		ET::$controller->addJSFile($this->getResource("reflection.js"));
		ET::$controller->addCSSFile($this->getResource("reflection.css"));
	}

}