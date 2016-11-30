<?
	class Excel{	
		public $data;
		public function WriteToFile($filename){			
			if($fp = @fopen($filename, "wb")){
				@fwrite($fp, $this->data);
				@fclose($fp);
			}			
		}
		
		public function BOF(){
			$this->data = pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
		}		
		
		public function EOF(){
			$this->data .= pack("ss", 0x0A, 0x00);
		}
		
		public function WriteLabel($row, $col, $value){
			$len = strlen($value);
			$this->data .= pack("ssssss", 0x204, 8 + $len, $row, $col, 0x0, $len);
			$this->data .= $value;
		}
		
		public function WriteNumber($row, $col, $value){
			$this->data .= pack("sssss", 0x203, 14, $row, $col, 0x0);
			$this->data .=  pack("d", $value);
		}
	}
?>