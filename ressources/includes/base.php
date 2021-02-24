<?php 
class minecraft_server
{
    private $address;
    private $port;

    public function __construct($address, $port = 25565){
        $this->address = $address;
        $this->port = $port;
    }

    public function get_ping_info(&$info){

        $starttime = microtime(true);
        $socket = @fsockopen($this->address, $this->port, $errno, $errstr, 1.0);
        $stoptime  = microtime(true);
        $ping = round(($stoptime-$starttime)*1000);

        if ($socket === false){
            return false;
        }

        fwrite($socket, "\xfe\x01");

        $data = fread($socket, 256);

        if (substr($data, 0, 1) != "\xff"){
            return false;
        }

        if (substr($data, 3, 5) == "\x00\xa7\x00\x31\x00"){
            $data = explode("\x00", mb_convert_encoding(substr($data, 15), 'UTF-8', 'UCS-2'));
        }else{
            $data = explode('§', mb_convert_encoding(substr($data, 3), 'UTF-8', 'UCS-2'));
        }

        if (count($data) == 3){
            $info = array(
                'version'       => '1.3.2',
                'motd'          => $data[0],
                'max_players'   => intval($data[1]),
                'ping'          => $ping
            );
        }else{
            $info = array(
                'version'       => $data[0],
                'motd'          => $data[1],
                'max_players'   => intval($data[2]),
                'ping'          => $ping
            );
        }

        return true;
    }
}
?>

<link rel="stylesheet" type="text/css" href="ressources/css/base.css">
<div class="play">
	<span>
		<p class="p-play">Rejoins nous avec plus de <em class="num-play">100</em> Joueurs !!</p>
		<a onclick="openDownload()" class="btn-play">Jouer</a>
	</span>
</div>
<div class="server">
	<div class="server-a">
		<h1 class="s-play">États des serveur <i class="fas fa-server"></i></h1>
	</div>
	<div class="server-b">
		<p class="server-maintenance">
			<?php
			$server = new minecraft_server("uranium.yvleis.fr", 25565);
                if (!$server->get_ping_info($info)){
                    include "ressources/includes/server/offline.php";
                }else{
                    include "ressources/includes/server/online.php";
                }
			?>
		</p>
	</div>
</div>
