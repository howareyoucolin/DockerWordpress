<?php 

namespace tester\timetrack;

class TimeTrack {
	
	public function getCurrentTime() {
		return date('m/d/Y h:i:s a', time());
	} 
	
}


