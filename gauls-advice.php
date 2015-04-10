<?php
	include 'header.php';

		@$wood = $_GET["wood"];
		@$clay = $_GET["clay"];
		@$iron = $_GET["iron"];
		@$crop = $_GET["crop"];
		
		@$hero_weapon = $_GET["hero_weapon"];
		$level_effect = 1.015;
		
		$phalanx_wood = 100;
		$phalanx_clay = 130;
		$phalanx_iron = 55;
		$phalanx_crop = 30;
		$phalanx_upkeep = 1;
		$phalanx_carrying_capacity = 35;
		$phalanx_speed = 7;
		$phalanx_attack = 15;
		$phalanx_defense_infantry = 40;
		$phalanx_defense_cavalry = 50;
		@$phalanx_level = $_GET["phalanx_level"];
		$phalanx_level_attack = $phalanx_attack * pow($level_effect,$phalanx_level);
		$phalanx_level_defense_infantry = $phalanx_defense_infantry * pow($level_effect,$phalanx_level);
		$phalanx_level_defense_cavalry = $phalanx_defense_cavalry * pow($level_effect,$phalanx_level);
		
		$swordsman_wood = 140;
		$swordsman_clay = 150;
		$swordsman_iron = 185;
		$swordsman_crop = 60;
		$swordsman_upkeep = 1;
		$swordsman_carrying_capacity = 45;
		$swordsman_speed = 6;
		$swordsman_attack = 65;
		$swordsman_defense_infantry = 35;
		$swordsman_defense_cavalry = 20;
		@$swordsman_level = $_GET["swordsman_level"];
		$swordsman_level_attack = $swordsman_attack * pow($level_effect,$swordsman_level);
		$swordsman_level_defense_infantry = $swordsman_defense_infantry * pow($level_effect,$swordsman_level);
		$swordsman_level_defense_cavalry = $swordsman_defense_cavalry * pow($level_effect,$swordsman_level);
		
		$thunder_wood = 350;
		$thunder_clay = 450;
		$thunder_iron = 230;
		$thunder_crop = 60;
		$thunder_upkeep = 2;
		$thunder_carrying_capacity = 75;
		$thunder_speed = 19;
		$thunder_attack = 90;
		$thunder_defense_infantry = 25;
		$thunder_defense_cavalry = 40;
		@$thunder_level = $_GET["thunder_level"];
		$thunder_level_attack = $thunder_attack * pow($level_effect,$thunder_level);
		$thunder_level_defense_infantry = $thunder_defense_infantry * pow($level_effect,$thunder_level);
		$thunder_level_defense_cavalry = $thunder_defense_cavalry * pow($level_effect,$thunder_level);
		
		$pathfinder_wood = 170;
		$pathfinder_clay = 150;
		$pathfinder_iron = 20;
		$pathfinder_crop = 40;
		$pathfinder_upkeep = 2;
		$pathfinder_carrying_capacity = 0;
		$pathfinder_speed = 17;
		$pathfinder_attack = 0;
		$pathfinder_defense_infantry = 20;
		$pathfinder_defense_cavalry = 10;
		@$pathfinder_level = $_GET["pathfinder_level"];
		$pathfinder_level_attack = $pathfinder_attack * pow($level_effect,$pathfinder_level);
		$pathfinder_level_defense_infantry = $pathfinder_defense_infantry * pow($level_effect,$pathfinder_level);
		$pathfinder_level_defense_cavalry = $pathfinder_defense_cavalry * pow($level_effect,$pathfinder_level);

		$druidrider_wood = 360;
		$druidrider_clay = 330;
		$druidrider_iron = 280;
		$druidrider_crop = 120;
		$druidrider_upkeep = 2;
		$druidrider_carrying_capacity = 35;
		$druidrider_speed = 16;
		$druidrider_attack = 45;
		$druidrider_defense_infantry = 115;
		$druidrider_defense_cavalry = 55;
		@$druidrider_level = $_GET["druidrider_level"];
		$druidrider_level_attack = $druidrider_attack * pow($level_effect,$druidrider_level);
		$druidrider_level_defense_infantry = $druidrider_defense_infantry * pow($level_effect,$druidrider_level);
		$druidrider_level_defense_cavalry = $druidrider_defense_cavalry * pow($level_effect,$druidrider_level);

		$haeduan_wood = 500;
		$haeduan_clay = 620;
		$haeduan_iron = 675;
		$haeduan_crop = 170;
		$haeduan_upkeep = 3;
		$haeduan_carrying_capacity = 65;
		$haeduan_speed = 13;
		$haeduan_attack = 140;
		$haeduan_defense_infantry = 60;
		$haeduan_defense_cavalry = 165;
		@$haeduan_level = $_GET["haeduan_level"];
		$haeduan_level_attack = $haeduan_attack * pow($level_effect,$haeduan_level);
		$haeduan_level_defense_infantry = $haeduan_defense_infantry * pow($level_effect,$haeduan_level);
		$haeduan_level_defense_cavalry = $haeduan_defense_cavalry * pow($level_effect,$haeduan_level);
		
		$ram_wood = 950;
		$ram_clay = 555;
		$ram_iron = 330;
		$ram_crop = 75;
		$ram_upkeep = 3;
		$ram_carrying_capacity = 0;
		$ram_speed = 4;
		$ram_attack = 50;
		$ram_defense_infantry = 30;
		$ram_defense_cavalry = 105;
		@$ram_level = $_GET["ram_level"];
		$ram_level_attack = $ram_attack * pow($level_effect,$ram_level);
		$ram_level_defense_infantry = $ram_defense_infantry * pow($level_effect,$ram_level);
		$ram_level_defense_cavalry = $ram_defense_cavalry * pow($level_effect,$ram_level);
		
		$trebuchet_wood = 950;
		$trebuchet_clay = 1450;
		$trebuchet_iron = 630;
		$trebuchet_crop = 90;
		$trebuchet_upkeep = 6;
		$trebuchet_carrying_capacity = 0;
		$trebuchet_speed = 3;
		$trebuchet_attack = 70;
		$trebuchet_defense_infantry = 45;
		$trebuchet_defense_cavalry = 10;
		@$trebuchet_level = $_GET["trebuchet_level"];
		$trebuchet_level_attack = $trebuchet_attack * pow($level_effect,$trebuchet_level);
		$trebuchet_level_defense_infantry = $trebuchet_defense_infantry * pow($level_effect,$trebuchet_level);
		$trebuchet_level_defense_cavalry = $trebuchet_defense_cavalry * pow($level_effect,$trebuchet_level);

		$chieftain_wood = 30750;
		$chieftain_clay = 45400;
		$chieftain_iron = 31000;
		$chieftain_crop = 37500;
		$chieftain_upkeep = 4;
		$chieftain_carrying_capacity = 0;
		$chieftain_speed = 5;
		$chieftain_attack = 40;
		$chieftain_defense_infantry = 50;
		$chieftain_defense_cavalry = 50;
		@$chieftain_level = $_GET["chieftain_level"];
		$chieftain_level_attack = $chieftain_attack * pow($level_effect,$chieftain_level);
		$chieftain_level_defense_infantry = $chieftain_defense_infantry * pow($level_effect,$chieftain_level);
		$chieftain_level_defense_cavalry = $chieftain_defense_cavalry * pow($level_effect,$chieftain_level);

		$settler_wood = 4400;
		$settler_clay = 5600;
		$settler_iron = 4200;
		$settler_crop = 3900;
		$settler_upkeep = 1;
		$settler_carrying_capacity = 3000;
		$settler_speed = 5;
		$settler_attack = 0;
		$settler_defense_infantry = 80;
		$settler_defense_cavalry = 80;
		@$settler_level = $_GET["settler_level"];
		$settler_level_attack = $settler_attack * pow($level_effect,$settler_level);
		$settler_level_defense_infantry = $settler_defense_infantry * pow($level_effect,$settler_level);
		$settler_level_defense_cavalry = $settler_defense_cavalry * pow($level_effect,$settler_level);

		if		( $hero_weapon == "spear_of_the_phalanx" ) $phalanx_hero_effeckt = 3;
		elseif	( $hero_weapon == "pike_of_the_phalanx" ) $phalanx_hero_effeckt = 4;
		elseif	( $hero_weapon == "lance_of_the_phalanx" ) $phalanx_hero_effeckt = 5;
		else 	  $phalanx_hero_effeckt = 0;
		
		if		( $hero_weapon == "short_sword_of_the_swordsman" ) $swordsman_hero_effeckt = 3;
		elseif	( $hero_weapon == "sword_of_the_swordsman" ) $swordsman_hero_effeckt = 4;
		elseif	( $hero_weapon == "long_sword_of_the_swordsman" ) $swordsman_hero_effeckt = 5;
		else	  $swordsman_hero_effeckt = 0;
		
		if		( $hero_weapon == "short_bow_of_the_theutates" ) $thunder_hero_effeckt = 6;
		elseif	( $hero_weapon == "bow_of_the_theutates" ) $thunder_hero_effeckt = 8;
		elseif	( $hero_weapon == "long_bow_of_the_theutates" ) $thunder_hero_effeckt = 10;
		else	  $thunder_hero_effeckt = 0;
		
		if		( $hero_weapon == "walking_staff_of_the_druidrider" ) $druidrider_hero_effeckt = 6;
		elseif	( $hero_weapon == "staff_of_the_druidrider" ) $druidrider_hero_effeckt = 8;
		elseif	( $hero_weapon == "fighting_staff_of_the_druidrider" ) $druidrider_hero_effeckt = 10;
		else	  $druidrider_hero_effeckt = 0;

		if		( $hero_weapon == "light_lance_of_the_haeduan" ) $haeduan_hero_effeckt = 9;
		elseif	( $hero_weapon == "lance_of_the_haeduan" ) $haeduan_hero_effeckt = 12;
		elseif	( $hero_weapon == "heavy_lance_of_the_haeduan" ) $haeduan_hero_effeckt = 15;
		else	  $haeduan_hero_effeckt = 0;
		
		$possible_phalanx = floor(min($wood/$phalanx_wood, $clay/$phalanx_clay, $iron/$phalanx_iron, $crop/$phalanx_crop));
		$possible_swordsman = floor(min($wood/$swordsman_wood, $clay/$swordsman_clay, $iron/$swordsman_iron, $crop/$swordsman_crop));
		$possible_thunder = floor(min($wood/$thunder_wood, $clay/$thunder_clay, $iron/$thunder_iron, $crop/$thunder_crop));
		$possible_pathfinder = floor(min($wood/$pathfinder_wood, $clay/$pathfinder_clay, $iron/$pathfinder_iron, $crop/$pathfinder_crop));
		$possible_druidrider = floor(min($wood/$druidrider_wood, $clay/$druidrider_clay, $iron/$druidrider_iron, $crop/$druidrider_crop));
		$possible_haeduan = floor(min($wood/$haeduan_wood, $clay/$haeduan_clay, $iron/$haeduan_iron, $crop/$haeduan_crop));
		$possible_ram = floor(min($wood/$ram_wood, $clay/$ram_clay, $iron/$ram_iron, $crop/$ram_crop));
		$possible_trebuchet = floor(min($wood/$trebuchet_wood, $clay/$trebuchet_clay, $iron/$trebuchet_iron, $crop/$trebuchet_crop));
		$possible_chieftain = floor(min($wood/$chieftain_wood, $clay/$chieftain_clay, $iron/$chieftain_iron, $crop/$chieftain_crop));
		$possible_settler = floor(min($wood/$settler_wood, $clay/$settler_clay, $iron/$settler_iron, $crop/$settler_crop));

		$format_possible_phalanx = number_format($possible_phalanx);
		$format_possible_swordsman = number_format($possible_swordsman);
		$format_possible_thunder = number_format($possible_thunder);
		$format_possible_pathfinder = number_format($possible_pathfinder);
		$format_possible_druidrider = number_format($possible_druidrider);
		$format_possible_haeduan = number_format($possible_haeduan);
		$format_possible_ram = number_format($possible_ram);
		$format_possible_trebuchet = number_format($possible_trebuchet);
		$format_possible_chieftain = number_format($possible_chieftain);
		$format_possible_settler = number_format($possible_settler);

		$total_phalanx_upkeep = $possible_phalanx * $phalanx_upkeep;
		$total_swordsman_upkeep = $possible_swordsman * $swordsman_upkeep;
		$total_thunder_upkeep = $possible_thunder * $thunder_upkeep;
		$total_pathfinder_upkeep = $possible_pathfinder * $pathfinder_upkeep;
		$total_druidrider_upkeep = $possible_druidrider * $druidrider_upkeep;
		$total_haeduan_upkeep = $possible_haeduan * $haeduan_upkeep;
		$total_ram_upkeep = $possible_ram * $ram_upkeep;
		$total_trebuchet_upkeep = $possible_trebuchet * $trebuchet_upkeep;
		$total_chieftain_upkeep = $possible_chieftain * $chieftain_upkeep;
		$total_settler_upkeep = $possible_settler * $settler_upkeep;
		
		$format_phalanx_upkeep = number_format($total_phalanx_upkeep);
		$format_swordsman_upkeep = number_format($total_swordsman_upkeep);
		$format_thunder_upkeep = number_format($total_thunder_upkeep);
		$format_pathfinder_upkeep = number_format($total_pathfinder_upkeep);
		$format_druidrider_upkeep = number_format($total_druidrider_upkeep);
		$format_haeduan_upkeep = number_format($total_haeduan_upkeep);
		$format_ram_upkeep = number_format($total_ram_upkeep);
		$format_trebuchet_upkeep = number_format($total_trebuchet_upkeep);
		$format_chieftain_upkeep = number_format($total_chieftain_upkeep);
		$format_settler_upkeep = number_format($total_settler_upkeep);

		$total_phalanx_carrying_capacity = $possible_phalanx * $phalanx_carrying_capacity;
		$total_swordsman_carrying_capacity = $possible_swordsman * $swordsman_carrying_capacity;
		$total_thunder_carrying_capacity = $possible_thunder * $thunder_carrying_capacity;
		$total_pathfinder_carrying_capacity = $possible_pathfinder * $pathfinder_carrying_capacity;
		$total_druidrider_carrying_capacity = $possible_druidrider * $druidrider_carrying_capacity;
		$total_haeduan_carrying_capacity = $possible_haeduan * $haeduan_carrying_capacity;
		$total_ram_carrying_capacity = $possible_ram * $ram_carrying_capacity;
		$total_trebuchet_carrying_capacity = $possible_trebuchet * $trebuchet_carrying_capacity;
		$total_chieftain_carrying_capacity = $possible_chieftain * $chieftain_carrying_capacity;
		$total_settler_carrying_capacity = $possible_settler * $settler_carrying_capacity;

		$format_phalanx_carrying_capacity = number_format($total_phalanx_carrying_capacity); 	
		$format_swordsman_carrying_capacity = number_format($total_swordsman_carrying_capacity); 	
		$format_thunder_carrying_capacity = number_format($total_thunder_carrying_capacity); 	
		$format_pathfinder_carrying_capacity = number_format($total_pathfinder_carrying_capacity); 	
		$format_druidrider_carrying_capacity = number_format($total_druidrider_carrying_capacity); 	
		$format_haeduan_carrying_capacity = number_format($total_haeduan_carrying_capacity); 	
		$format_ram_carrying_capacity = number_format($total_ram_carrying_capacity); 	
		$format_trebuchet_carrying_capacity = number_format($total_trebuchet_carrying_capacity); 	
		$format_chieftain_carrying_capacity = number_format($total_chieftain_carrying_capacity); 	
		$format_settler_carrying_capacity = number_format($total_settler_carrying_capacity);

		$total_phalanx_attack = $possible_phalanx * ($phalanx_level_attack + $phalanx_hero_effeckt);
		$total_phalanx_defense_infantry = $possible_phalanx * ($phalanx_level_defense_infantry + $phalanx_hero_effeckt);
		$total_phalanx_defense_cavalry = $possible_phalanx * ($phalanx_level_defense_cavalry + $phalanx_hero_effeckt);
		
		$format_phalanx_attack = number_format($total_phalanx_attack);
		$format_phalanx_defense_infantry = number_format($total_phalanx_defense_infantry);
		$format_phalanx_defense_cavalry = number_format($total_phalanx_defense_cavalry);

		$total_swordsman_attack = $possible_swordsman * ($swordsman_level_attack + $swordsman_hero_effeckt);
		$total_swordsman_defense_infantry = $possible_swordsman * ($swordsman_level_defense_infantry + $swordsman_hero_effeckt);
		$total_swordsman_defense_cavalry = $possible_swordsman * ($swordsman_level_defense_cavalry + $swordsman_hero_effeckt);
		
		$format_swordsman_attack = number_format($total_swordsman_attack);
		$format_swordsman_defense_infantry = number_format($total_swordsman_defense_infantry);
		$format_swordsman_defense_cavalry = number_format($total_swordsman_defense_cavalry);

		$total_thunder_attack = $possible_thunder * ($thunder_level_attack + $thunder_hero_effeckt);
		$total_thunder_defense_infantry = $possible_thunder * ($thunder_level_defense_infantry + $thunder_hero_effeckt);
		$total_thunder_defense_cavalry = $possible_thunder * ($thunder_level_defense_cavalry + $thunder_hero_effeckt);
		
		$format_thunder_attack = number_format($total_thunder_attack);
		$format_thunder_defense_infantry = number_format($total_thunder_defense_infantry);
		$format_thunder_defense_cavalry = number_format($total_thunder_defense_cavalry);

		$total_druidrider_attack = $possible_druidrider * ($druidrider_level_attack + $druidrider_hero_effeckt);
		$total_druidrider_defense_infantry = $possible_druidrider * ($druidrider_level_defense_infantry + $druidrider_hero_effeckt);
		$total_druidrider_defense_cavalry = $possible_druidrider * ($druidrider_level_defense_cavalry + $druidrider_hero_effeckt);

		$format_druidrider_attack = number_format($total_druidrider_attack);
		$format_druidrider_defense_infantry = number_format($total_druidrider_defense_infantry);
		$format_druidrider_defense_cavalry = number_format($total_druidrider_defense_cavalry);
		
		$total_haeduan_attack = $possible_haeduan * ($haeduan_level_attack + $haeduan_hero_effeckt);
		$total_haeduan_defense_infantry = $possible_haeduan * ($haeduan_level_defense_infantry + $haeduan_hero_effeckt);
		$total_haeduan_defense_cavalry = $possible_haeduan * ($haeduan_level_defense_cavalry + $haeduan_hero_effeckt);

		$format_haeduan_attack = number_format($total_haeduan_attack);
		$format_haeduan_defense_infantry = number_format($total_haeduan_defense_infantry);
		$format_haeduan_defense_cavalry = number_format($total_haeduan_defense_cavalry);
		
		$total_pathfinder_attack = $possible_pathfinder * $pathfinder_level_attack;
		$total_pathfinder_defense_infantry = $possible_pathfinder * $pathfinder_level_defense_infantry;
		$total_pathfinder_defense_cavalry = $possible_pathfinder * $pathfinder_level_defense_cavalry;

		$format_pathfinder_attack = number_format($total_pathfinder_attack);
		$format_pathfinder_defense_infantry = number_format($total_pathfinder_defense_infantry);
		$format_pathfinder_defense_cavalry = number_format($total_pathfinder_defense_cavalry);
		
		$total_ram_attack = $possible_ram * $ram_level_attack;
		$total_ram_defense_infantry = $possible_ram * $ram_level_defense_infantry;
		$total_ram_defense_cavalry = $possible_ram * $ram_level_defense_cavalry;

		$format_ram_attack = number_format($total_ram_attack);
		$format_ram_defense_infantry = number_format($total_ram_defense_infantry);
		$format_ram_defense_cavalry = number_format($total_ram_defense_cavalry);
		
		$total_trebuchet_attack = $possible_trebuchet * $trebuchet_level_attack;
		$total_trebuchet_defense_infantry = $possible_trebuchet * $trebuchet_level_defense_infantry;
		$total_trebuchet_defense_cavalry = $possible_trebuchet * $trebuchet_level_defense_cavalry;

		$format_trebuchet_attack = number_format($total_trebuchet_attack);
		$format_trebuchet_defense_infantry = number_format($total_trebuchet_defense_infantry);
		$format_trebuchet_defense_cavalry = number_format($total_trebuchet_defense_cavalry);
		
		$total_chieftain_attack = $possible_chieftain * $chieftain_level_attack;
		$total_chieftain_defense_infantry = $possible_chieftain * $chieftain_level_defense_infantry;
		$total_chieftain_defense_cavalry = $possible_chieftain * $chieftain_level_defense_cavalry;

		$format_chieftain_attack = number_format($total_chieftain_attack);
		$format_chieftain_defense_infantry = number_format($total_chieftain_defense_infantry);
		$format_chieftain_defense_cavalry = number_format($total_chieftain_defense_cavalry);

		$total_settler_attack = $possible_settler * $settler_level_attack;
		$total_settler_defense_infantry = $possible_settler * $settler_level_defense_infantry;
		$total_settler_defense_cavalry = $possible_settler * $settler_level_defense_cavalry;

		$format_settler_attack = number_format($total_settler_attack);
		$format_settler_defense_infantry = number_format($total_settler_defense_infantry);
		$format_settler_defense_cavalry = number_format($total_settler_defense_cavalry);

		$max_total_attack = max($total_phalanx_attack, $total_swordsman_attack, $total_thunder_attack, $total_druidrider_attack, $total_haeduan_attack, $total_pathfinder_attack, $total_ram_attack, $total_trebuchet_attack, $total_chieftain_attack, $total_settler_attack);
		$max_total_defense_infantry = max($total_phalanx_defense_infantry, $total_swordsman_defense_infantry, $total_druidrider_defense_infantry, $total_druidrider_defense_infantry, $total_haeduan_defense_infantry, $total_pathfinder_defense_infantry, $total_ram_defense_infantry, $total_trebuchet_defense_infantry, $total_chieftain_defense_infantry, $total_settler_defense_infantry);
		$max_total_defense_cavalry = max($total_phalanx_defense_cavalry, $total_swordsman_defense_cavalry, $total_druidrider_defense_cavalry, $total_druidrider_defense_cavalry, $total_haeduan_defense_cavalry, $total_pathfinder_defense_cavalry, $total_ram_defense_cavalry, $total_trebuchet_defense_cavalry, $total_chieftain_defense_cavalry, $total_settler_defense_cavalry);
		$max_total_carrying_capacity = max($total_phalanx_carrying_capacity, $total_swordsman_carrying_capacity, $total_thunder_carrying_capacity, $total_druidrider_carrying_capacity, $total_haeduan_carrying_capacity);
		$min_total_upkeep = min($total_phalanx_upkeep, $total_swordsman_upkeep, $total_thunder_upkeep, $total_druidrider_upkeep, $total_haeduan_upkeep, $total_pathfinder_upkeep, $total_ram_upkeep, $total_trebuchet_upkeep);

		if		( $total_phalanx_attack == $max_total_attack ) $advice_max_attack = $locale_phalanx;
		elseif	( $total_swordsman_attack == $max_total_attack ) $advice_max_attack = $locale_swordsman;
		elseif	( $total_thunder_attack == $max_total_attack ) $advice_max_attack = $locale_thunder;
		elseif	( $total_pathfinder_attack == $max_total_attack ) $advice_max_attack =  $locale_pathfinder;
		elseif	( $total_druidrider_attack == $max_total_attack ) $advice_max_attack = $locale_druidrider;
		elseif	( $total_haeduan_attack == $max_total_attack ) $advice_max_attack = $locale_haeduan;
		elseif	( $total_ram_attack == $max_total_attack ) $advice_max_attack = $locale_ram;
		elseif	( $total_trebuchet_attack == $max_total_attack ) $advice_max_attack = $locale_trebuchet;
		elseif	( $total_chieftain_attack == $max_total_attack ) $advice_max_attack = $locale_chieftain;
		elseif	( $total_settler_attack == $max_total_attack ) $advice_max_attack = $locale_settler;

			if		( $total_phalanx_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_phalanx_upkeep;
			elseif	( $total_swordsman_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_swordsman_upkeep;
			elseif	( $total_thunder_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_druidrider_upkeep;
			elseif	( $total_pathfinder_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_pathfinder_upkeep;
			elseif	( $total_druidrider_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_druidrider_upkeep;
			elseif	( $total_haeduan_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_haeduan_upkeep;
			elseif	( $total_ram_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_ram_upkeep;
			elseif	( $total_trebuchet_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_trebuchet_upkeep;
			elseif	( $total_chieftain_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_chieftain_upkeep;
			elseif	( $total_settler_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_settler_upkeep;
		
		if		( $total_phalanx_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_phalanx;
		elseif	( $total_swordsman_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_swordsman;
		elseif	( $total_thunder_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_thunder;
		elseif	( $total_pathfinder_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry =  $locale_pathfinder;
		elseif	( $total_druidrider_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_druidrider;
		elseif	( $total_haeduan_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_haeduan;
		elseif	( $total_ram_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_ram;
		elseif	( $total_trebuchet_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_trebuchet;
		elseif	( $total_chieftain_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_chieftain;
		elseif	( $total_settler_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_settler;

			if		( $total_phalanx_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_phalanx_upkeep;
			elseif	( $total_swordsman_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_swordsman_upkeep;
			elseif	( $total_thunder_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_druidrider_upkeep;
			elseif	( $total_pathfinder_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_pathfinder_upkeep;
			elseif	( $total_druidrider_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_druidrider_upkeep;
			elseif	( $total_haeduan_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_haeduan_upkeep;
			elseif	( $total_ram_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_ram_upkeep;
			elseif	( $total_trebuchet_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_trebuchet_upkeep;
			elseif	( $total_chieftain_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_chieftain_upkeep;
			elseif	( $total_settler_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_settler_upkeep;

		if		( $total_phalanx_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_phalanx;
		elseif	( $total_swordsman_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_swordsman;
		elseif	( $total_thunder_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_thunder;
		elseif	( $total_pathfinder_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry =  $locale_pathfinder;
		elseif	( $total_druidrider_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_druidrider;
		elseif	( $total_haeduan_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_haeduan;
		elseif	( $total_ram_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_ram;
		elseif	( $total_trebuchet_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_trebuchet;
		elseif	( $total_chieftain_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_chieftain;
		elseif	( $total_settler_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_settler;

			if		( $total_phalanx_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_phalanx_upkeep;
			elseif	( $total_swordsman_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_swordsman_upkeep;
			elseif	( $total_thunder_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_druidrider_upkeep;
			elseif	( $total_pathfinder_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_pathfinder_upkeep;
			elseif	( $total_druidrider_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_druidrider_upkeep;
			elseif	( $total_haeduan_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_haeduan_upkeep;
			elseif	( $total_ram_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_ram_upkeep;
			elseif	( $total_trebuchet_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_trebuchet_upkeep;
			elseif	( $total_chieftain_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_chieftain_upkeep;
			elseif	( $total_settler_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_settler_upkeep;

		if		( $total_phalanx_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = $locale_phalanx;
		elseif	( $total_swordsman_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = $locale_swordsman;
		elseif	( $total_thunder_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = $locale_thunder;
		elseif	( $total_druidrider_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = $locale_druidrider;
		elseif	( $total_haeduan_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = $locale_haeduan;

			if		( $total_phalanx_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_phalanx_upkeep;
			elseif	( $total_swordsman_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_swordsman_upkeep;
			elseif	( $total_thunder_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_druidrider_upkeep;
			elseif	( $total_druidrider_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_druidrider_upkeep;
			elseif	( $total_haeduan_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_haeduan_upkeep;

		@$total_phalanx_attack_rate_max_attack_for_upkeep = ($total_phalanx_attack * $advice_max_attack_total_upkeep) / $total_phalanx_upkeep;
		@$total_swordsman_attack_rate_max_attack_for_upkeep = ($total_swordsman_attack * $advice_max_attack_total_upkeep) / $total_swordsman_upkeep;
		@$total_thunder_attack_rate_max_attack_for_upkeep = ($total_thunder_attack * $advice_max_attack_total_upkeep) / $total_thunder_upkeep;
		@$total_pathfinder_attack_rate_max_attack_for_upkeep = ($total_pathfinder_attack * $advice_max_attack_total_upkeep) / $total_pathfinder_upkeep;
		@$total_druidrider_attack_rate_max_attack_for_upkeep = ($total_druidrider_attack * $advice_max_attack_total_upkeep) / $total_druidrider_upkeep;
		@$total_haeduan_attack_rate_max_attack_for_upkeep = ($total_haeduan_attack * $advice_max_attack_total_upkeep) / $total_haeduan_upkeep;
		@$total_ram_attack_rate_max_attack_for_upkeep = ($total_ram_attack * $advice_max_attack_total_upkeep) / $total_ram_upkeep;
		@$total_trebuchet_attack_rate_max_attack_for_upkeep = ($total_trebuchet_attack * $advice_max_attack_total_upkeep) / $total_trebuchet_upkeep;
		@$total_chieftain_attack_rate_max_attack_for_upkeep = ($total_chieftain_attack * $advice_max_attack_total_upkeep) / $total_chieftain_upkeep;
		@$total_settler_attack_rate_max_attack_for_upkeep = ($total_settler_attack * $advice_max_attack_total_upkeep) / $total_settler_upkeep;

		@$total_phalanx_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_phalanx_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_phalanx_upkeep;
		@$total_swordsman_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_swordsman_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_swordsman_upkeep;
		@$total_thunder_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_thunder_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_thunder_upkeep;
		@$total_pathfinder_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_pathfinder_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_pathfinder_upkeep;
		@$total_druidrider_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_druidrider_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_druidrider_upkeep;
		@$total_haeduan_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_haeduan_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_haeduan_upkeep;
		@$total_ram_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_ram_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_ram_upkeep;
		@$total_trebuchet_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_trebuchet_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_trebuchet_upkeep;
		@$total_chieftain_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_chieftain_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_chieftain_upkeep;
		@$total_settler_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_settler_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_settler_upkeep;

		@$total_phalanx_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_phalanx_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_phalanx_upkeep;
		@$total_swordsman_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_swordsman_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_swordsman_upkeep;
		@$total_thunder_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_thunder_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_thunder_upkeep;
		@$total_pathfinder_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_pathfinder_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_pathfinder_upkeep;
		@$total_druidrider_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_druidrider_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_druidrider_upkeep;
		@$total_haeduan_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_haeduan_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_haeduan_upkeep;
		@$total_ram_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_ram_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_ram_upkeep;
		@$total_trebuchet_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_trebuchet_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_trebuchet_upkeep;
		@$total_chieftain_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_chieftain_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_chieftain_upkeep;
		@$total_settler_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_settler_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_settler_upkeep;

		@$total_phalanx_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_phalanx_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_phalanx_upkeep;
		@$total_swordsman_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_swordsman_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_swordsman_upkeep;
		@$total_thunder_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_thunder_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_thunder_upkeep;
		@$total_druidrider_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_druidrider_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_druidrider_upkeep;
		@$total_haeduan_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_haeduan_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_haeduan_upkeep;
		
		$advice_rate_attack = max($total_phalanx_attack_rate_max_attack_for_upkeep, $total_swordsman_attack_rate_max_attack_for_upkeep, $total_thunder_attack_rate_max_attack_for_upkeep, $total_pathfinder_attack_rate_max_attack_for_upkeep, $total_druidrider_attack_rate_max_attack_for_upkeep, $total_haeduan_attack_rate_max_attack_for_upkeep, $total_ram_attack_rate_max_attack_for_upkeep, $total_trebuchet_attack_rate_max_attack_for_upkeep, $total_chieftain_attack_rate_max_attack_for_upkeep, $total_settler_attack_rate_max_attack_for_upkeep);
		$advice_rate_defense_infantry = max($total_phalanx_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_swordsman_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_thunder_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_pathfinder_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_druidrider_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_haeduan_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_ram_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_trebuchet_defense_infantry_rate_max_defense_infantry_for_upkeep);
		$advice_rate_defense_cavalry = max($total_phalanx_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_swordsman_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_thunder_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_pathfinder_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_druidrider_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_haeduan_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_ram_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_trebuchet_defense_cavalry_rate_max_defense_cavalry_for_upkeep);
		$advice_rate_carrying_capacity = max($total_phalanx_carrying_capacity_rate_max_carrying_capacity_for_upkeep, $total_swordsman_carrying_capacity_rate_max_carrying_capacity_for_upkeep, $total_thunder_carrying_capacity_rate_max_carrying_capacity_for_upkeep, $total_druidrider_carrying_capacity_rate_max_carrying_capacity_for_upkeep, $total_haeduan_carrying_capacity_rate_max_carrying_capacity_for_upkeep);

		if		( $advice_rate_attack == $total_phalanx_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_phalanx;
		elseif	( $advice_rate_attack == $total_swordsman_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_swordsman;
		elseif	( $advice_rate_attack == $total_thunder_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_thunder;
		elseif	( $advice_rate_attack == $total_pathfinder_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_pathfinder;
		elseif	( $advice_rate_attack == $total_druidrider_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_druidrider;
		elseif	( $advice_rate_attack == $total_haeduan_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_haeduan;
		elseif	( $advice_rate_attack == $total_ram_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_ram;
		elseif	( $advice_rate_attack == $total_trebuchet_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_trebuchet;
		elseif	( $advice_rate_attack == $total_chieftain_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_chieftain;
		elseif	( $advice_rate_attack == $total_settler_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_settler;
		
		if		( $advice_rate_defense_infantry == $total_phalanx_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_phalanx;
		elseif	( $advice_rate_defense_infantry == $total_swordsman_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_swordsman;
		elseif	( $advice_rate_defense_infantry == $total_thunder_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_thunder;
		elseif	( $advice_rate_defense_infantry == $total_pathfinder_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_pathfinder;
		elseif	( $advice_rate_defense_infantry == $total_druidrider_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_druidrider;
		elseif	( $advice_rate_defense_infantry == $total_haeduan_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_haeduan;
		elseif	( $advice_rate_defense_infantry == $total_ram_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_ram;
		elseif	( $advice_rate_defense_infantry == $total_trebuchet_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_trebuchet;
		elseif	( $advice_rate_defense_infantry == $total_chieftain_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_chieftain;
		elseif	( $advice_rate_defense_infantry == $total_settler_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_settler;

		if		( $advice_rate_defense_cavalry == $total_phalanx_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_phalanx;
		elseif	( $advice_rate_defense_cavalry == $total_swordsman_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_swordsman;
		elseif	( $advice_rate_defense_cavalry == $total_thunder_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_thunder;
		elseif	( $advice_rate_defense_cavalry == $total_pathfinder_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_pathfinder;
		elseif	( $advice_rate_defense_cavalry == $total_druidrider_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_druidrider;
		elseif	( $advice_rate_defense_cavalry == $total_haeduan_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_haeduan;
		elseif	( $advice_rate_defense_cavalry == $total_ram_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_ram;
		elseif	( $advice_rate_defense_cavalry == $total_trebuchet_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_trebuchet;
		elseif	( $advice_rate_defense_cavalry == $total_chieftain_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_chieftain;
		elseif	( $advice_rate_defense_cavalry == $total_settler_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_settler;

		if		( $advice_rate_carrying_capacity == $total_phalanx_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = $locale_phalanx;
		elseif	( $advice_rate_carrying_capacity == $total_swordsman_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = $locale_swordsman;
		elseif	( $advice_rate_carrying_capacity == $total_thunder_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = $locale_thunder;
		elseif	( $advice_rate_carrying_capacity == $total_druidrider_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = $locale_druidrider;
		elseif	( $advice_rate_carrying_capacity == $total_haeduan_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = $locale_haeduan;

	$locale_following_table = _('According to following table;');
	$locale_for_attack_power = sprintf(_('you should train %s for attack power,'), $advice_max_attack);
	$locale_for_infantry_deffence = sprintf(_('you should train %s for infantry deffence,'), $advice_max_defense_infantry);
	$locale_for_cavalry_deffence = sprintf(_('you should train %s for cavalry deffence,'), $advice_max_defense_cavalry);
	$locale_for_carrying_capacity = sprintf(_('you should train %s for maximum swag.'), $advice_max_carrying_capacity);
	$locale_upkeep_problem = _('And if you have upkeep problem;');
	$locale_for_attack_power_with_upkeep_problem = sprintf(_('you should train %s for attack power,'), $advice_rate_attack_unit);
	$locale_for_infantry_deffence_with_upkeep_problem = sprintf(_('you should train %s for infantry deffence,'), $advice_rate_defense_infantry_unit);
	$locale_for_cavalry_deffence_with_upkeep_problem = sprintf(_('you should train %s for cavalry deffence,'), $advice_rate_defense_cavalry_unit);
	$locale_for_carrying_capacity_with_upkeep_problem = sprintf(_('you should train %s for maximum swag.'), $advice_rate_carrying_capacity_unit);
		
		$export_table = <<<EOF
		
		<div class="advice">
		
		<div class="advice-text">
		
			<p>$locale_following_table</p>
			<p class="advice-content">$locale_for_attack_power<br />
			$locale_for_infantry_deffence<br />
			$locale_for_cavalry_deffence<br />
			$locale_for_carrying_capacity</p>
			<p>$locale_upkeep_problem</p>
			<p class="advice-content">$locale_for_attack_power_with_upkeep_problem<br />
			$locale_for_infantry_deffence_with_upkeep_problem<br />
			$locale_for_cavalry_deffence_with_upkeep_problem<br />
			$locale_for_carrying_capacity_with_upkeep_problem</p>
		</div>

		<div class="advice-table">
			<table class="responstable" border="1">
				<tr>
					<th class="table-units" colspan="2"><strong>$locale_units</strong></th>
					<th width="100px"><a class="tooltip-right" data-tooltip="$locale_quantity"><img class="quantity" height="1" width="1" src="/images/x.gif" /></a></th>
					<th width="100px"><a class="tooltip-right" data-tooltip="$locale_speed"><img class="speed" height="1" width="1" src="/images/x.gif" /></a></th>
					<th width="100px"><a class="tooltip-right" data-tooltip="$locale_total_upkeep"><img class="upkeep" height="1" width="1" src="/images/x.gif" /></a></th>
					<th width="100px"><a class="tooltip-right" data-tooltip="$locale_total_carrying_capacity"><img class="carry" height="1" width="1" src="/images/x.gif" /></a></th>
					<th width="100px"><a class="tooltip-left" data-tooltip="$locale_total_attack_force"><img class="attack" height="1" width="1" src="/images/x.gif" /></a></th>
					<th width="100px"><a class="tooltip-left" data-tooltip="$locale_total_infantry_defense_force"><img class="inf-def" height="1" width="1" src="/images/x.gif" /></a></th>
					<th width="100px"><a class="tooltip-left" data-tooltip="$locale_total_cavalry_defense_force"><img class="cav-def" height="1" width="1" src="/images/x.gif" /></a></th>
				</tr>
				<tr>
					<td class="table-units">$locale_phalanx</td>
					<td><a class="tooltip-right" data-tooltip="$locale_phalanx"><img class="phalanx" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_phalanx</td>
					<td>$phalanx_speed</td>
					<td>$format_phalanx_upkeep</td>
					<td>$format_phalanx_carrying_capacity</td>
					<td>$format_phalanx_attack</td>
					<td>$format_phalanx_defense_infantry</td>
					<td>$format_phalanx_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_swordsman</td>
					<td><a class="tooltip-right" data-tooltip="$locale_swordsman"><img class="swordsman" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_swordsman</td>
					<td>$swordsman_speed</td>
					<td>$format_swordsman_upkeep</td>
					<td>$format_swordsman_carrying_capacity</td>
					<td>$format_swordsman_attack</td>
					<td>$format_swordsman_defense_infantry</td>
					<td>$format_swordsman_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_thunder</td>
					<td><a class="tooltip-right" data-tooltip="$locale_thunder"><img class="theutates-thunder" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_thunder</td>
					<td>$thunder_speed</td>
					<td>$format_thunder_upkeep</td>
					<td>$format_thunder_carrying_capacity</td>
					<td>$format_thunder_attack</td>
					<td>$format_thunder_defense_infantry</td>
					<td>$format_thunder_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_pathfinder</td>
					<td><a class="tooltip-right" data-tooltip="$locale_pathfinder"><img class="pathfinder" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_pathfinder</td>
					<td>$pathfinder_speed</td>
					<td>$format_pathfinder_upkeep</td>
					<td>$format_pathfinder_carrying_capacity</td>
					<td>$format_pathfinder_attack</td>
					<td>$format_pathfinder_defense_infantry</td>
					<td>$format_pathfinder_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_druidrider</td>
					<td><a class="tooltip-right" data-tooltip="$locale_druidrider"><img class="druidrider" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_druidrider</td>
					<td>$druidrider_speed</td>
					<td>$format_druidrider_upkeep</td>
					<td>$format_druidrider_carrying_capacity</td>
					<td>$format_druidrider_attack</td>
					<td>$format_druidrider_defense_infantry</td>
					<td>$format_druidrider_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_haeduan</td>
					<td><a class="tooltip-right" data-tooltip="$locale_haeduan"><img class="haeduan" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_haeduan</td>
					<td>$haeduan_speed</td>
					<td>$format_haeduan_upkeep</td>
					<td>$format_haeduan_carrying_capacity</td>
					<td>$format_haeduan_attack</td>
					<td>$format_haeduan_defense_infantry</td>
					<td>$format_haeduan_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_ram</td>
					<td><a class="tooltip-right" data-tooltip="$locale_ram"><img class="gaul-ram" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_ram</td>
					<td>$ram_speed</td>
					<td>$format_ram_upkeep</td>
					<td>$format_ram_carrying_capacity</td>
					<td>$format_ram_attack</td>
					<td>$format_ram_defense_infantry</td>
					<td>$format_ram_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_trebuchet</td>
					<td><a class="tooltip-right" data-tooltip="$locale_trebuchet"><img class="trebuchet" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_trebuchet</td>
					<td>$trebuchet_speed</td>
					<td>$format_trebuchet_upkeep</td>
					<td>$format_trebuchet_carrying_capacity</td>
					<td>$format_trebuchet_attack</td>
					<td>$format_trebuchet_defense_infantry</td>
					<td>$format_trebuchet_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_chieftain</td>
					<td><a class="tooltip-right" data-tooltip="$locale_chieftain"><img class="chieftain" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_chieftain</td>
					<td>$chieftain_speed</td>
					<td>$format_chieftain_upkeep</td>
					<td>$format_chieftain_carrying_capacity</td>
					<td>$format_chieftain_attack</td>
					<td>$format_chieftain_defense_infantry</td>
					<td>$format_chieftain_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_settler</td>
					<td><a class="tooltip-right" data-tooltip="$locale_settler"><img class="gaul-settler" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_settler</td>
					<td>$settler_speed</td>
					<td>$format_settler_upkeep</td>
					<td>$format_settler_carrying_capacity</td>
					<td>$format_settler_attack</td>
					<td>$format_settler_defense_infantry</td>
					<td>$format_settler_defense_cavalry</td>
				</tr>
			</table>
		</div>
		</div>
EOF;
		
		echo $export_table;

?>

<?php
	include 'footer.php';
?>