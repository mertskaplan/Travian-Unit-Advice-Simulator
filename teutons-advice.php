<?php
	include 'header.php';

		@$wood = $_GET["wood"];
		@$clay = $_GET["clay"];
		@$iron = $_GET["iron"];
		@$crop = $_GET["crop"];
		
		@$hero_weapon = $_GET["hero_weapon"];
		$level_effect = 1.015;
		
		$clubswinger_wood = 95;
		$clubswinger_clay = 75;
		$clubswinger_iron = 40;
		$clubswinger_crop = 40;
		$clubswinger_upkeep = 1;
		$clubswinger_carrying_capacity = 60;
		$clubswinger_speed = 7;
		$clubswinger_attack = 40;
		$clubswinger_defense_infantry = 20;
		$clubswinger_defense_cavalry = 5;
		@$clubswinger_level = $_GET["clubswinger_level"];
		$clubswinger_level_attack = $clubswinger_attack * pow($level_effect,$clubswinger_level);
		$clubswinger_level_defense_infantry = $clubswinger_defense_infantry * pow($level_effect,$clubswinger_level);
		$clubswinger_level_defense_cavalry = $clubswinger_defense_cavalry * pow($level_effect,$clubswinger_level);
		
		$spearman_wood = 145;
		$spearman_clay = 70;
		$spearman_iron = 85;
		$spearman_crop = 40;
		$spearman_upkeep = 1;
		$spearman_carrying_capacity = 40;
		$spearman_speed = 7;
		$spearman_attack = 10;
		$spearman_defense_infantry = 35;
		$spearman_defense_cavalry = 60;
		@$spearman_level = $_GET["spearman_level"];
		$spearman_level_attack = $spearman_attack * pow($level_effect,$spearman_level);
		$spearman_level_defense_infantry = $spearman_defense_infantry * pow($level_effect,$spearman_level);
		$spearman_level_defense_cavalry = $spearman_defense_cavalry * pow($level_effect,$spearman_level);
		
		$axeman_wood = 130;
		$axeman_clay = 120;
		$axeman_iron = 170;
		$axeman_crop = 70;
		$axeman_upkeep = 1;
		$axeman_carrying_capacity = 50;
		$axeman_speed = 6;
		$axeman_attack = 60;
		$axeman_defense_infantry = 30;
		$axeman_defense_cavalry = 30;
		@$axeman_level = $_GET["axeman_level"];
		$axeman_level_attack = $axeman_attack * pow($level_effect,$axeman_level);
		$axeman_level_defense_infantry = $axeman_defense_infantry * pow($level_effect,$axeman_level);
		$axeman_level_defense_cavalry = $axeman_defense_cavalry * pow($level_effect,$axeman_level);
		
		$scout_wood = 160;
		$scout_clay = 100;
		$scout_iron = 50;
		$scout_crop = 50;
		$scout_upkeep = 1;
		$scout_carrying_capacity = 0;
		$scout_speed = 9;
		$scout_attack = 0;
		$scout_defense_infantry = 10;
		$scout_defense_cavalry = 5;
		@$scout_level = $_GET["scout_level"];
		$scout_level_attack = $scout_attack * pow($level_effect,$scout_level);
		$scout_level_defense_infantry = $scout_defense_infantry * pow($level_effect,$scout_level);
		$scout_level_defense_cavalry = $scout_defense_cavalry * pow($level_effect,$scout_level);

		$paladin_wood = 370;
		$paladin_clay = 270;
		$paladin_iron = 290;
		$paladin_crop = 75;
		$paladin_upkeep = 2;
		$paladin_carrying_capacity = 110;
		$paladin_speed = 10;
		$paladin_attack = 55;
		$paladin_defense_infantry = 100;
		$paladin_defense_cavalry = 40;
		@$paladin_level = $_GET["paladin_level"];
		$paladin_level_attack = $paladin_attack * pow($level_effect,$paladin_level);
		$paladin_level_defense_infantry = $paladin_defense_infantry * pow($level_effect,$paladin_level);
		$paladin_level_defense_cavalry = $paladin_defense_cavalry * pow($level_effect,$paladin_level);

		$teutonic_knight_wood = 450;
		$teutonic_knight_clay = 515;
		$teutonic_knight_iron = 480;
		$teutonic_knight_crop = 80;
		$teutonic_knight_upkeep = 3;
		$teutonic_knight_carrying_capacity = 80;
		$teutonic_knight_speed = 9;
		$teutonic_knight_attack = 150;
		$teutonic_knight_defense_infantry = 50;
		$teutonic_knight_defense_cavalry = 75;
		@$teutonic_knight_level = $_GET["teutonic_knight_level"];
		$teutonic_knight_level_attack = $teutonic_knight_attack * pow($level_effect,$teutonic_knight_level);
		$teutonic_knight_level_defense_infantry = $teutonic_knight_defense_infantry * pow($level_effect,$teutonic_knight_level);
		$teutonic_knight_level_defense_cavalry = $teutonic_knight_defense_cavalry * pow($level_effect,$teutonic_knight_level);
		
		$ram_wood = 1000;
		$ram_clay = 300;
		$ram_iron = 350;
		$ram_crop = 70;
		$ram_upkeep = 3;
		$ram_carrying_capacity = 0;
		$ram_speed = 4;
		$ram_attack = 65;
		$ram_defense_infantry = 30;
		$ram_defense_cavalry = 80;
		@$ram_level = $_GET["ram_level"];
		$ram_level_attack = $ram_attack * pow($level_effect,$ram_level);
		$ram_level_defense_infantry = $ram_defense_infantry * pow($level_effect,$ram_level);
		$ram_level_defense_cavalry = $ram_defense_cavalry * pow($level_effect,$ram_level);
		
		$catapult_wood = 900;
		$catapult_clay = 1200;
		$catapult_iron = 600;
		$catapult_crop = 60;
		$catapult_upkeep = 6;
		$catapult_carrying_capacity = 0;
		$catapult_speed = 3;
		$catapult_attack = 50;
		$catapult_defense_infantry = 60;
		$catapult_defense_cavalry = 10;
		@$catapult_level = $_GET["catapult_level"];
		$catapult_level_attack = $catapult_attack * pow($level_effect,$catapult_level);
		$catapult_level_defense_infantry = $catapult_defense_infantry * pow($level_effect,$catapult_level);
		$catapult_level_defense_cavalry = $catapult_defense_cavalry * pow($level_effect,$catapult_level);

		$chief_wood = 35500;
		$chief_clay = 26600;
		$chief_iron = 25000;
		$chief_crop = 27200;
		$chief_upkeep = 4;
		$chief_carrying_capacity = 0;
		$chief_speed = 4;
		$chief_attack = 40;
		$chief_defense_infantry = 60;
		$chief_defense_cavalry = 40;
		@$chief_level = $_GET["chief_level"];
		$chief_level_attack = $chief_attack * pow($level_effect,$chief_level);
		$chief_level_defense_infantry = $chief_defense_infantry * pow($level_effect,$chief_level);
		$chief_level_defense_cavalry = $chief_defense_cavalry * pow($level_effect,$chief_level);

		$settler_wood = 5800;
		$settler_clay = 4400;
		$settler_iron = 4600;
		$settler_crop = 5200;
		$settler_upkeep = 1;
		$settler_carrying_capacity = 3000;
		$settler_speed = 5;
		$settler_attack = 10;
		$settler_defense_infantry = 80;
		$settler_defense_cavalry = 80;
		@$settler_level = $_GET["settler_level"];
		$settler_level_attack = $settler_attack * pow($level_effect,$settler_level);
		$settler_level_defense_infantry = $settler_defense_infantry * pow($level_effect,$settler_level);
		$settler_level_defense_cavalry = $settler_defense_cavalry * pow($level_effect,$settler_level);
		
		if		( $hero_weapon == "club_of_the_clubswinger" ) $clubswinger_hero_effeckt = 3;
		elseif	( $hero_weapon == "mace_of_the_clubswinger" ) $clubswinger_hero_effeckt = 4;
		elseif	( $hero_weapon == "morning_star_of_the_clubswinger" ) $clubswinger_hero_effeckt = 5;
		else 	  $clubswinger_hero_effeckt = 0;
		
		if		( $hero_weapon == "spear_of_the_spearman" ) $spearman_hero_effeckt = 3;
		elseif	( $hero_weapon == "spike_of_the_spearman" ) $spearman_hero_effeckt = 4;
		elseif	( $hero_weapon == "lance_of_the_spearman" ) $spearman_hero_effeckt = 5;
		else	  $spearman_hero_effeckt = 0;
		
		if		( $hero_weapon == "hatchet_of_the_axeman" ) $axeman_hero_effeckt = 3;
		elseif	( $hero_weapon == "axe_of_the_axeman" ) $axeman_hero_effeckt = 4;
		elseif	( $hero_weapon == "battle_axe_of_the_axeman" ) $axeman_hero_effeckt = 5;
		else	  $axeman_hero_effeckt = 0;
		
		if		( $hero_weapon == "light_hammer_of_the_paladin" ) $paladin_hero_effeckt = 6;
		elseif	( $hero_weapon == "hammer_of_the_paladin" ) $paladin_hero_effeckt = 8;
		elseif	( $hero_weapon == "heavy_hammer_of_the_paladin" ) $paladin_hero_effeckt = 10;
		else	  $paladin_hero_effeckt = 0;

		if		( $hero_weapon == "short_sword_of_the_teutonic_knight" ) $teutonic_knight_hero_effeckt = 9;
		elseif	( $hero_weapon == "sword_of_the_teutonic_knight" ) $teutonic_knight_hero_effeckt = 12;
		elseif	( $hero_weapon == "long_sword_of_the_teutonic_knight" ) $teutonic_knight_hero_effeckt = 15;
		else	  $teutonic_knight_hero_effeckt = 0;
		
		$possible_clubswinger = floor(min($wood/$clubswinger_wood, $clay/$clubswinger_clay, $iron/$clubswinger_iron, $crop/$clubswinger_crop));
		$possible_spearman = floor(min($wood/$spearman_wood, $clay/$spearman_clay, $iron/$spearman_iron, $crop/$spearman_crop));
		$possible_axeman = floor(min($wood/$axeman_wood, $clay/$axeman_clay, $iron/$axeman_iron, $crop/$axeman_crop));
		$possible_scout = floor(min($wood/$scout_wood, $clay/$scout_clay, $iron/$scout_iron, $crop/$scout_crop));
		$possible_paladin = floor(min($wood/$paladin_wood, $clay/$paladin_clay, $iron/$paladin_iron, $crop/$paladin_crop));
		$possible_teutonic_knight = floor(min($wood/$teutonic_knight_wood, $clay/$teutonic_knight_clay, $iron/$teutonic_knight_iron, $crop/$teutonic_knight_crop));
		$possible_ram = floor(min($wood/$ram_wood, $clay/$ram_clay, $iron/$ram_iron, $crop/$ram_crop));
		$possible_catapult = floor(min($wood/$catapult_wood, $clay/$catapult_clay, $iron/$catapult_iron, $crop/$catapult_crop));
		$possible_chief = floor(min($wood/$chief_wood, $clay/$chief_clay, $iron/$chief_iron, $crop/$chief_crop));
		$possible_settler = floor(min($wood/$settler_wood, $clay/$settler_clay, $iron/$settler_iron, $crop/$settler_crop));

		$format_possible_clubswinger = number_format($possible_clubswinger);
		$format_possible_spearman = number_format($possible_spearman);
		$format_possible_axeman = number_format($possible_axeman);
		$format_possible_scout = number_format($possible_scout);
		$format_possible_paladin = number_format($possible_paladin);
		$format_possible_teutonic_knight = number_format($possible_teutonic_knight);
		$format_possible_ram = number_format($possible_ram);
		$format_possible_catapult = number_format($possible_catapult);
		$format_possible_chief = number_format($possible_chief);
		$format_possible_settler = number_format($possible_settler);

		$total_clubswinger_upkeep = $possible_clubswinger * $clubswinger_upkeep;
		$total_spearman_upkeep = $possible_spearman * $spearman_upkeep;
		$total_axeman_upkeep = $possible_axeman * $axeman_upkeep;
		$total_scout_upkeep = $possible_scout * $scout_upkeep;
		$total_paladin_upkeep = $possible_paladin * $paladin_upkeep;
		$total_teutonic_knight_upkeep = $possible_teutonic_knight * $teutonic_knight_upkeep;
		$total_ram_upkeep = $possible_ram * $ram_upkeep;
		$total_catapult_upkeep = $possible_catapult * $catapult_upkeep;
		$total_chief_upkeep = $possible_chief * $chief_upkeep;
		$total_settler_upkeep = $possible_settler * $settler_upkeep;
		
		$format_clubswinger_upkeep = number_format($total_clubswinger_upkeep);
		$format_spearman_upkeep = number_format($total_spearman_upkeep);
		$format_axeman_upkeep = number_format($total_axeman_upkeep);
		$format_scout_upkeep = number_format($total_scout_upkeep);
		$format_paladin_upkeep = number_format($total_paladin_upkeep);
		$format_teutonic_knight_upkeep = number_format($total_teutonic_knight_upkeep);
		$format_ram_upkeep = number_format($total_ram_upkeep);
		$format_catapult_upkeep = number_format($total_catapult_upkeep);
		$format_chief_upkeep = number_format($total_chief_upkeep);
		$format_settler_upkeep = number_format($total_settler_upkeep);

		$total_clubswinger_carrying_capacity = $possible_clubswinger * $clubswinger_carrying_capacity;
		$total_spearman_carrying_capacity = $possible_spearman * $spearman_carrying_capacity;
		$total_axeman_carrying_capacity = $possible_axeman * $axeman_carrying_capacity;
		$total_scout_carrying_capacity = $possible_scout * $scout_carrying_capacity;
		$total_paladin_carrying_capacity = $possible_paladin * $paladin_carrying_capacity;
		$total_teutonic_knight_carrying_capacity = $possible_teutonic_knight * $teutonic_knight_carrying_capacity;
		$total_ram_carrying_capacity = $possible_ram * $ram_carrying_capacity;
		$total_catapult_carrying_capacity = $possible_catapult * $catapult_carrying_capacity;
		$total_chief_carrying_capacity = $possible_chief * $chief_carrying_capacity;
		$total_settler_carrying_capacity = $possible_settler * $settler_carrying_capacity;

		$format_clubswinger_carrying_capacity = number_format($total_clubswinger_carrying_capacity); 	
		$format_spearman_carrying_capacity = number_format($total_spearman_carrying_capacity); 	
		$format_axeman_carrying_capacity = number_format($total_axeman_carrying_capacity); 	
		$format_scout_carrying_capacity = number_format($total_scout_carrying_capacity); 	
		$format_paladin_carrying_capacity = number_format($total_paladin_carrying_capacity); 	
		$format_teutonic_knight_carrying_capacity = number_format($total_teutonic_knight_carrying_capacity); 	
		$format_ram_carrying_capacity = number_format($total_ram_carrying_capacity); 	
		$format_catapult_carrying_capacity = number_format($total_catapult_carrying_capacity); 	
		$format_chief_carrying_capacity = number_format($total_chief_carrying_capacity); 	
		$format_settler_carrying_capacity = number_format($total_settler_carrying_capacity);
		
		$total_clubswinger_attack = $possible_clubswinger * ($clubswinger_level_attack + $clubswinger_hero_effeckt);
		$total_clubswinger_defense_infantry = $possible_clubswinger * ($clubswinger_level_defense_infantry + $clubswinger_hero_effeckt);
		$total_clubswinger_defense_cavalry = $possible_clubswinger * ($clubswinger_level_defense_cavalry + $clubswinger_hero_effeckt);
		
		$format_clubswinger_attack = number_format($total_clubswinger_attack);
		$format_clubswinger_defense_infantry = number_format($total_clubswinger_defense_infantry);
		$format_clubswinger_defense_cavalry = number_format($total_clubswinger_defense_cavalry);

		$total_spearman_attack = $possible_spearman * ($spearman_level_attack + $spearman_hero_effeckt);
		$total_spearman_defense_infantry = $possible_spearman * ($spearman_level_defense_infantry + $spearman_hero_effeckt);
		$total_spearman_defense_cavalry = $possible_spearman * ($spearman_level_defense_cavalry + $spearman_hero_effeckt);
		
		$format_spearman_attack = number_format($total_spearman_attack);
		$format_spearman_defense_infantry = number_format($total_spearman_defense_infantry);
		$format_spearman_defense_cavalry = number_format($total_spearman_defense_cavalry);

		$total_axeman_attack = $possible_axeman * ($axeman_level_attack + $axeman_hero_effeckt);
		$total_axeman_defense_infantry = $possible_axeman * ($axeman_level_defense_infantry + $axeman_hero_effeckt);
		$total_axeman_defense_cavalry = $possible_axeman * ($axeman_level_defense_cavalry + $axeman_hero_effeckt);
		
		$format_axeman_attack = number_format($total_axeman_attack);
		$format_axeman_defense_infantry = number_format($total_axeman_defense_infantry);
		$format_axeman_defense_cavalry = number_format($total_axeman_defense_cavalry);

		$total_paladin_attack = $possible_paladin * ($paladin_level_attack + $paladin_hero_effeckt);
		$total_paladin_defense_infantry = $possible_paladin * ($paladin_level_defense_infantry + $paladin_hero_effeckt);
		$total_paladin_defense_cavalry = $possible_paladin * ($paladin_level_defense_cavalry + $paladin_hero_effeckt);

		$format_paladin_attack = number_format($total_paladin_attack);
		$format_paladin_defense_infantry = number_format($total_paladin_defense_infantry);
		$format_paladin_defense_cavalry = number_format($total_paladin_defense_cavalry);
		
		$total_teutonic_knight_attack = $possible_teutonic_knight * ($teutonic_knight_level_attack + $teutonic_knight_hero_effeckt);
		$total_teutonic_knight_defense_infantry = $possible_teutonic_knight * ($teutonic_knight_level_defense_infantry + $teutonic_knight_hero_effeckt);
		$total_teutonic_knight_defense_cavalry = $possible_teutonic_knight * ($teutonic_knight_level_defense_cavalry + $teutonic_knight_hero_effeckt);

		$format_teutonic_knight_attack = number_format($total_teutonic_knight_attack);
		$format_teutonic_knight_defense_infantry = number_format($total_teutonic_knight_defense_infantry);
		$format_teutonic_knight_defense_cavalry = number_format($total_teutonic_knight_defense_cavalry);
		
		$total_scout_attack = $possible_scout * $scout_level_attack;
		$total_scout_defense_infantry = $possible_scout * $scout_level_defense_infantry;
		$total_scout_defense_cavalry = $possible_scout * $scout_level_defense_cavalry;

		$format_scout_attack = number_format($total_scout_attack);
		$format_scout_defense_infantry = number_format($total_scout_defense_infantry);
		$format_scout_defense_cavalry = number_format($total_scout_defense_cavalry);
		
		$total_ram_attack = $possible_ram * $ram_level_attack;
		$total_ram_defense_infantry = $possible_ram * $ram_level_defense_infantry;
		$total_ram_defense_cavalry = $possible_ram * $ram_level_defense_cavalry;

		$format_ram_attack = number_format($total_ram_attack);
		$format_ram_defense_infantry = number_format($total_ram_defense_infantry);
		$format_ram_defense_cavalry = number_format($total_ram_defense_cavalry);
		
		$total_catapult_attack = $possible_catapult * $catapult_level_attack;
		$total_catapult_defense_infantry = $possible_catapult * $catapult_level_defense_infantry;
		$total_catapult_defense_cavalry = $possible_catapult * $catapult_level_defense_cavalry;

		$format_catapult_attack = number_format($total_catapult_attack);
		$format_catapult_defense_infantry = number_format($total_catapult_defense_infantry);
		$format_catapult_defense_cavalry = number_format($total_catapult_defense_cavalry);
		
		$total_chief_attack = $possible_chief * $chief_level_attack;
		$total_chief_defense_infantry = $possible_chief * $chief_level_defense_infantry;
		$total_chief_defense_cavalry = $possible_chief * $chief_level_defense_cavalry;

		$format_chief_attack = number_format($total_chief_attack);
		$format_chief_defense_infantry = number_format($total_chief_defense_infantry);
		$format_chief_defense_cavalry = number_format($total_chief_defense_cavalry);

		$total_settler_attack = $possible_settler * $settler_level_attack;
		$total_settler_defense_infantry = $possible_settler * $settler_level_defense_infantry;
		$total_settler_defense_cavalry = $possible_settler * $settler_level_defense_cavalry;

		$format_settler_attack = number_format($total_settler_attack);
		$format_settler_defense_infantry = number_format($total_settler_defense_infantry);
		$format_settler_defense_cavalry = number_format($total_settler_defense_cavalry);

		$max_total_attack = max($total_clubswinger_attack, $total_spearman_attack, $total_axeman_attack, $total_paladin_attack, $total_teutonic_knight_attack, $total_scout_attack, $total_ram_attack, $total_catapult_attack, $total_chief_attack, $total_settler_attack);
		$max_total_defense_infantry = max($total_clubswinger_defense_infantry, $total_spearman_defense_infantry, $total_paladin_defense_infantry, $total_paladin_defense_infantry, $total_teutonic_knight_defense_infantry, $total_scout_defense_infantry, $total_ram_defense_infantry, $total_catapult_defense_infantry, $total_chief_defense_infantry, $total_settler_defense_infantry);
		$max_total_defense_cavalry = max($total_clubswinger_defense_cavalry, $total_spearman_defense_cavalry, $total_paladin_defense_cavalry, $total_paladin_defense_cavalry, $total_teutonic_knight_defense_cavalry, $total_scout_defense_cavalry, $total_ram_defense_cavalry, $total_catapult_defense_cavalry, $total_chief_defense_cavalry, $total_settler_defense_cavalry);
		$max_total_carrying_capacity = max($total_clubswinger_carrying_capacity, $total_spearman_carrying_capacity, $total_axeman_carrying_capacity, $total_paladin_carrying_capacity, $total_teutonic_knight_carrying_capacity);
		$min_total_upkeep = min($total_clubswinger_upkeep, $total_spearman_upkeep, $total_axeman_upkeep, $total_paladin_upkeep, $total_teutonic_knight_upkeep, $total_scout_upkeep, $total_ram_upkeep, $total_catapult_upkeep);

		if		( $total_clubswinger_attack == $max_total_attack ) $advice_max_attack = $locale_clubswinger;
		elseif	( $total_spearman_attack == $max_total_attack ) $advice_max_attack = $locale_spearman;
		elseif	( $total_axeman_attack == $max_total_attack ) $advice_max_attack = $locale_axeman;
		elseif	( $total_scout_attack == $max_total_attack ) $advice_max_attack =  $locale_scout;
		elseif	( $total_paladin_attack == $max_total_attack ) $advice_max_attack = $locale_paladin;
		elseif	( $total_teutonic_knight_attack == $max_total_attack ) $advice_max_attack = $locale_teutonic_knight;
		elseif	( $total_ram_attack == $max_total_attack ) $advice_max_attack = $locale_ram;
		elseif	( $total_catapult_attack == $max_total_attack ) $advice_max_attack = $locale_catapult;
		elseif	( $total_chief_attack == $max_total_attack ) $advice_max_attack = $locale_chief;
		elseif	( $total_settler_attack == $max_total_attack ) $advice_max_attack = $locale_settler;

			if		( $total_clubswinger_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_clubswinger_upkeep;
			elseif	( $total_spearman_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_spearman_upkeep;
			elseif	( $total_axeman_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_paladin_upkeep;
			elseif	( $total_scout_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_scout_upkeep;
			elseif	( $total_paladin_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_paladin_upkeep;
			elseif	( $total_teutonic_knight_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_teutonic_knight_upkeep;
			elseif	( $total_ram_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_ram_upkeep;
			elseif	( $total_catapult_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_catapult_upkeep;
			elseif	( $total_chief_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_chief_upkeep;
			elseif	( $total_settler_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_settler_upkeep;
		
		if		( $total_clubswinger_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_clubswinger;
		elseif	( $total_spearman_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_spearman;
		elseif	( $total_axeman_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_axeman;
		elseif	( $total_scout_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry =  $locale_scout;
		elseif	( $total_paladin_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_paladin;
		elseif	( $total_teutonic_knight_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_teutonic_knight;
		elseif	( $total_ram_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_ram;
		elseif	( $total_catapult_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_catapult;
		elseif	( $total_chief_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_chief;
		elseif	( $total_settler_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = $locale_settler;
		
			if		( $total_clubswinger_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_clubswinger_upkeep;
			elseif	( $total_spearman_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_spearman_upkeep;
			elseif	( $total_axeman_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_paladin_upkeep;
			elseif	( $total_scout_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_scout_upkeep;
			elseif	( $total_paladin_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_paladin_upkeep;
			elseif	( $total_teutonic_knight_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_teutonic_knight_upkeep;
			elseif	( $total_ram_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_ram_upkeep;
			elseif	( $total_catapult_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_catapult_upkeep;
			elseif	( $total_chief_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_chief_upkeep;
			elseif	( $total_settler_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_settler_upkeep;

		if		( $total_clubswinger_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_clubswinger;
		elseif	( $total_spearman_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_spearman;
		elseif	( $total_axeman_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_axeman;
		elseif	( $total_scout_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry =  $locale_scout;
		elseif	( $total_paladin_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_paladin;
		elseif	( $total_teutonic_knight_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_teutonic_knight;
		elseif	( $total_ram_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_ram;
		elseif	( $total_catapult_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_catapult;
		elseif	( $total_chief_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_chief;
		elseif	( $total_settler_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = $locale_settler;

			if		( $total_clubswinger_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_clubswinger_upkeep;
			elseif	( $total_spearman_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_spearman_upkeep;
			elseif	( $total_axeman_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_paladin_upkeep;
			elseif	( $total_scout_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_scout_upkeep;
			elseif	( $total_paladin_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_paladin_upkeep;
			elseif	( $total_teutonic_knight_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_teutonic_knight_upkeep;
			elseif	( $total_ram_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_ram_upkeep;
			elseif	( $total_catapult_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_catapult_upkeep;
			elseif	( $total_chief_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_chief_upkeep;
			elseif	( $total_settler_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_settler_upkeep;

		if		( $total_clubswinger_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = $locale_clubswinger;
		elseif	( $total_spearman_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = $locale_spearman;
		elseif	( $total_axeman_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = $locale_axeman;
		elseif	( $total_paladin_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = $locale_paladin;
		elseif	( $total_teutonic_knight_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = $locale_teutonic_knight;

			if		( $total_clubswinger_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_clubswinger_upkeep;
			elseif	( $total_spearman_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_spearman_upkeep;
			elseif	( $total_axeman_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_paladin_upkeep;
			elseif	( $total_paladin_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_paladin_upkeep;
			elseif	( $total_teutonic_knight_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_teutonic_knight_upkeep;

		@$total_clubswinger_attack_rate_max_attack_for_upkeep = ($total_clubswinger_attack * $advice_max_attack_total_upkeep) / $total_clubswinger_upkeep;
		@$total_spearman_attack_rate_max_attack_for_upkeep = ($total_spearman_attack * $advice_max_attack_total_upkeep) / $total_spearman_upkeep;
		@$total_axeman_attack_rate_max_attack_for_upkeep = ($total_axeman_attack * $advice_max_attack_total_upkeep) / $total_axeman_upkeep;
		@$total_scout_attack_rate_max_attack_for_upkeep = ($total_scout_attack * $advice_max_attack_total_upkeep) / $total_scout_upkeep;
		@$total_paladin_attack_rate_max_attack_for_upkeep = ($total_paladin_attack * $advice_max_attack_total_upkeep) / $total_paladin_upkeep;
		@$total_teutonic_knight_attack_rate_max_attack_for_upkeep = ($total_teutonic_knight_attack * $advice_max_attack_total_upkeep) / $total_teutonic_knight_upkeep;
		@$total_ram_attack_rate_max_attack_for_upkeep = ($total_ram_attack * $advice_max_attack_total_upkeep) / $total_ram_upkeep;
		@$total_catapult_attack_rate_max_attack_for_upkeep = ($total_catapult_attack * $advice_max_attack_total_upkeep) / $total_catapult_upkeep;
		@$total_chief_attack_rate_max_attack_for_upkeep = ($total_chief_attack * $advice_max_attack_total_upkeep) / $total_chief_upkeep;
		@$total_settler_attack_rate_max_attack_for_upkeep = ($total_settler_attack * $advice_max_attack_total_upkeep) / $total_settler_upkeep;
		
		@$total_clubswinger_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_clubswinger_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_clubswinger_upkeep;
		@$total_spearman_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_spearman_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_spearman_upkeep;
		@$total_axeman_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_axeman_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_axeman_upkeep;
		@$total_scout_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_scout_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_scout_upkeep;
		@$total_paladin_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_paladin_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_paladin_upkeep;
		@$total_teutonic_knight_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_teutonic_knight_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_teutonic_knight_upkeep;
		@$total_ram_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_ram_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_ram_upkeep;
		@$total_catapult_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_catapult_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_catapult_upkeep;
		@$total_chief_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_chief_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_chief_upkeep;
		@$total_settler_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_settler_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_settler_upkeep;

		@$total_clubswinger_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_clubswinger_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_clubswinger_upkeep;
		@$total_spearman_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_spearman_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_spearman_upkeep;
		@$total_axeman_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_axeman_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_axeman_upkeep;
		@$total_scout_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_scout_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_scout_upkeep;
		@$total_paladin_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_paladin_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_paladin_upkeep;
		@$total_teutonic_knight_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_teutonic_knight_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_teutonic_knight_upkeep;
		@$total_ram_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_ram_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_ram_upkeep;
		@$total_catapult_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_catapult_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_catapult_upkeep;
		@$total_chief_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_chief_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_chief_upkeep;
		@$total_settler_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_settler_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_settler_upkeep;

		@$total_clubswinger_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_clubswinger_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_clubswinger_upkeep;
		@$total_spearman_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_spearman_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_spearman_upkeep;
		@$total_axeman_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_axeman_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_axeman_upkeep;
		@$total_paladin_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_paladin_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_paladin_upkeep;
		@$total_teutonic_knight_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_teutonic_knight_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_teutonic_knight_upkeep;
	
		$advice_rate_attack = max($total_clubswinger_attack_rate_max_attack_for_upkeep, $total_spearman_attack_rate_max_attack_for_upkeep, $total_axeman_attack_rate_max_attack_for_upkeep, $total_scout_attack_rate_max_attack_for_upkeep, $total_paladin_attack_rate_max_attack_for_upkeep, $total_teutonic_knight_attack_rate_max_attack_for_upkeep, $total_ram_attack_rate_max_attack_for_upkeep, $total_catapult_attack_rate_max_attack_for_upkeep, $total_chief_attack_rate_max_attack_for_upkeep, $total_settler_attack_rate_max_attack_for_upkeep);
		$advice_rate_defense_infantry = max($total_clubswinger_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_spearman_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_axeman_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_scout_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_paladin_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_teutonic_knight_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_ram_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_catapult_defense_infantry_rate_max_defense_infantry_for_upkeep);
		$advice_rate_defense_cavalry = max($total_clubswinger_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_spearman_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_axeman_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_scout_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_paladin_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_teutonic_knight_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_ram_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_catapult_defense_cavalry_rate_max_defense_cavalry_for_upkeep);
		$advice_rate_carrying_capacity = max($total_clubswinger_carrying_capacity_rate_max_carrying_capacity_for_upkeep, $total_spearman_carrying_capacity_rate_max_carrying_capacity_for_upkeep, $total_axeman_carrying_capacity_rate_max_carrying_capacity_for_upkeep, $total_paladin_carrying_capacity_rate_max_carrying_capacity_for_upkeep, $total_teutonic_knight_carrying_capacity_rate_max_carrying_capacity_for_upkeep);

		if		( $advice_rate_attack == $total_clubswinger_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_clubswinger;
		elseif	( $advice_rate_attack == $total_spearman_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_spearman;
		elseif	( $advice_rate_attack == $total_axeman_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_axeman;
		elseif	( $advice_rate_attack == $total_scout_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_scout;
		elseif	( $advice_rate_attack == $total_paladin_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_paladin;
		elseif	( $advice_rate_attack == $total_teutonic_knight_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_teutonic_knight;
		elseif	( $advice_rate_attack == $total_ram_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_ram;
		elseif	( $advice_rate_attack == $total_catapult_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_catapult;
		elseif	( $advice_rate_attack == $total_chief_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_chief;
		elseif	( $advice_rate_attack == $total_settler_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = $locale_settler;
		
		if		( $advice_rate_defense_infantry == $total_clubswinger_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_clubswinger;
		elseif	( $advice_rate_defense_infantry == $total_spearman_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_spearman;
		elseif	( $advice_rate_defense_infantry == $total_axeman_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_axeman;
		elseif	( $advice_rate_defense_infantry == $total_scout_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_scout;
		elseif	( $advice_rate_defense_infantry == $total_paladin_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_paladin;
		elseif	( $advice_rate_defense_infantry == $total_teutonic_knight_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_teutonic_knight;
		elseif	( $advice_rate_defense_infantry == $total_ram_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_ram;
		elseif	( $advice_rate_defense_infantry == $total_catapult_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_catapult;
		elseif	( $advice_rate_defense_infantry == $total_chief_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_chief;
		elseif	( $advice_rate_defense_infantry == $total_settler_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = $locale_settler;

		if		( $advice_rate_defense_cavalry == $total_clubswinger_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_clubswinger;
		elseif	( $advice_rate_defense_cavalry == $total_spearman_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_spearman;
		elseif	( $advice_rate_defense_cavalry == $total_axeman_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_axeman;
		elseif	( $advice_rate_defense_cavalry == $total_scout_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_scout;
		elseif	( $advice_rate_defense_cavalry == $total_paladin_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_paladin;
		elseif	( $advice_rate_defense_cavalry == $total_teutonic_knight_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_teutonic_knight;
		elseif	( $advice_rate_defense_cavalry == $total_ram_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_ram;
		elseif	( $advice_rate_defense_cavalry == $total_catapult_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_catapult;
		elseif	( $advice_rate_defense_cavalry == $total_chief_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_chief;
		elseif	( $advice_rate_defense_cavalry == $total_settler_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = $locale_settler;

		if		( $advice_rate_carrying_capacity == $total_clubswinger_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = $locale_clubswinger;
		elseif	( $advice_rate_carrying_capacity == $total_spearman_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = $locale_spearman;
		elseif	( $advice_rate_carrying_capacity == $total_axeman_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = $locale_axeman;
		elseif	( $advice_rate_carrying_capacity == $total_paladin_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = $locale_paladin;
		elseif	( $advice_rate_carrying_capacity == $total_teutonic_knight_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = $locale_teutonic_knight;

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
					<td class="table-units">$locale_clubswinger</td>
					<td><a class="tooltip-right" data-tooltip="$locale_clubswinger"><img class="clubswinger" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_clubswinger</td>
					<td>$clubswinger_speed</td>
					<td>$format_clubswinger_upkeep</td>
					<td>$format_clubswinger_carrying_capacity</td>
					<td>$format_clubswinger_attack</td>
					<td>$format_clubswinger_defense_infantry</td>
					<td>$format_clubswinger_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_spearman</td>
					<td><a class="tooltip-right" data-tooltip="$locale_spearman"><img class="spearman" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_spearman</td>
					<td>$spearman_speed</td>
					<td>$format_spearman_upkeep</td>
					<td>$format_spearman_carrying_capacity</td>
					<td>$format_spearman_attack</td>
					<td>$format_spearman_defense_infantry</td>
					<td>$format_spearman_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_axeman</td>
					<td><a class="tooltip-right" data-tooltip="$locale_axeman"><img class="axeman" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_axeman</td>
					<td>$axeman_speed</td>
					<td>$format_axeman_upkeep</td>
					<td>$format_axeman_carrying_capacity</td>
					<td>$format_axeman_attack</td>
					<td>$format_axeman_defense_infantry</td>
					<td>$format_axeman_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_scout</td>
					<td><a class="tooltip-right" data-tooltip="$locale_scout"><img class="scout" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_scout</td>
					<td>$scout_speed</td>
					<td>$format_scout_upkeep</td>
					<td>$format_scout_carrying_capacity</td>
					<td>$format_scout_attack</td>
					<td>$format_scout_defense_infantry</td>
					<td>$format_scout_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_paladin</td>
					<td><a class="tooltip-right" data-tooltip="$locale_paladin"><img class="paladin" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_paladin</td>
					<td>$paladin_speed</td>
					<td>$format_paladin_upkeep</td>
					<td>$format_paladin_carrying_capacity</td>
					<td>$format_paladin_attack</td>
					<td>$format_paladin_defense_infantry</td>
					<td>$format_paladin_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_teutonic_knight</td>
					<td><a class="tooltip-right" data-tooltip="$locale_teutonic_knight"><img class="teutonic-knight" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_teutonic_knight</td>
					<td>$teutonic_knight_speed</td>
					<td>$format_teutonic_knight_upkeep</td>
					<td>$format_teutonic_knight_carrying_capacity</td>
					<td>$format_teutonic_knight_attack</td>
					<td>$format_teutonic_knight_defense_infantry</td>
					<td>$format_teutonic_knight_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_ram</td>
					<td><a class="tooltip-right" data-tooltip="$locale_ram"><img class="teutonic-ram" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_ram</td>
					<td>$ram_speed</td>
					<td>$format_ram_upkeep</td>
					<td>$format_ram_carrying_capacity</td>
					<td>$format_ram_attack</td>
					<td>$format_ram_defense_infantry</td>
					<td>$format_ram_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_catapult</td>
					<td><a class="tooltip-right" data-tooltip="$locale_catapult"><img class="catapult" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_catapult</td>
					<td>$catapult_speed</td>
					<td>$format_catapult_upkeep</td>
					<td>$format_catapult_carrying_capacity</td>
					<td>$format_catapult_attack</td>
					<td>$format_catapult_defense_infantry</td>
					<td>$format_catapult_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_chief</td>
					<td><a class="tooltip-right" data-tooltip="$locale_chief"><img class="chief" height="1" width="1" src="/images/x.gif" /></a></td>
					<td>$format_possible_chief</td>
					<td>$chief_speed</td>
					<td>$format_chief_upkeep</td>
					<td>$format_chief_carrying_capacity</td>
					<td>$format_chief_attack</td>
					<td>$format_chief_defense_infantry</td>
					<td>$format_chief_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_settler</td>
					<td><a class="tooltip-right" data-tooltip="$locale_settler"><img class="teutonic-settler" height="1" width="1" src="/images/x.gif" /></a></td>
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