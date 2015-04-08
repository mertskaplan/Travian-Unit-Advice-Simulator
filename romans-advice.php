<?php
	include 'header.php';

		@$wood = $_GET["wood"]; // Mevcut odun
		@$clay = $_GET["clay"]; // Mevcut tugla
		@$iron = $_GET["iron"]; // mevcut demir
		@$crop = $_GET["crop"]; // Mevcut tahil
		
		@$hero_weapon = $_GET["hero_weapon"]; // Kahramanin silahi
		$level_effect = 1.015; // Yukseltme seviyelerinin etkisi
		
		$legionnaire_wood = 120; // Lejyoner icin odun miktari
		$legionnaire_clay = 100; // Lejyoner icin tugla miktari
		$legionnaire_iron = 150; // Lejyoner icin demir miktari
		$legionnaire_crop = 30; // Lejyoner icin tahil miktari
		$legionnaire_upkeep = 1; // Lejyoner icin saatlik tahil tuketimi
		$legionnaire_carrying_capacity = 50; // Lejyoner’in tasima kapasitesi
		$legionnaire_speed = 12; // Lejyoner’in birim hizi
		$legionnaire_attack = 40; // Lejyoner’in saldiri gucu
		$legionnaire_defense_infantry = 35; // Lejyoner’in piyade savunmasi
		$legionnaire_defense_cavalry = 50; // Lejyoner’in suvari savunmasi
		@$legionnaire_level = $_GET["legionnaire_level"]; // Lejyoner’in seviyesi
		$legionnaire_level_attack = $legionnaire_attack * pow($level_effect,$legionnaire_level); // Lejyoner'in seviyesine gore saldiri gucu
		$legionnaire_level_defense_infantry = $legionnaire_defense_infantry * pow($level_effect,$legionnaire_level); // Lejyoner'in seviyesine gore piyade savunmasi
		$legionnaire_level_defense_cavalry = $legionnaire_defense_cavalry * pow($level_effect,$legionnaire_level); // Lejyoner'in seviyesine gore suvari savunmasi
		
		$praetorian_wood = 100; // Pretoryan icin odun miktari
		$praetorian_clay = 130; // Pretoryan icin tugla miktari
		$praetorian_iron = 160; // Pretoryan icin demir miktari
		$praetorian_crop = 30; // Pretoryan icin tahil miktari
		$praetorian_upkeep = 1; // Pretoryan icin saatlik tahil tuketimi
		$praetorian_carrying_capacity = 20; // Pretoryan’in tasima kapasitesi
		$praetorian_speed = 10; // Pretoryan'in birim hizi
		$praetorian_attack = 30; // Pretoryan'in saldiri gucu
		$praetorian_defense_infantry = 65; // Pretoryan'in piyade savunmasi
		$praetorian_defense_cavalry = 35; // Pretoryan'in suvari savunmasi
		@$praetorian_level = $_GET["praetorian_level"]; // Pretoryan'in seviyesi
		$praetorian_level_attack = $praetorian_attack * pow($level_effect,$praetorian_level); // Pretoryan'in seviyesine gore saldiri gucu
		$praetorian_level_defense_infantry = $praetorian_defense_infantry * pow($level_effect,$praetorian_level); // Pretoryan'in seviyesine gore piyade savunmasi
		$praetorian_level_defense_cavalry = $praetorian_defense_cavalry * pow($level_effect,$praetorian_level); // Pretoryan'in seviyesine gore suvari savunmasi
		
		$imperian_wood = 150; // Emperyan icin odun miktari
		$imperian_clay = 160; // Emperyan icin tugla miktari
		$imperian_iron = 210; // Emperyan icin demir miktari
		$imperian_crop = 80; // Emperyan icin tahil miktari
		$imperian_upkeep = 1; // Emperyan icin saatlik tahil tuketimi
		$imperian_carrying_capacity = 50; // Emperyan'in tasima kapasitesi
		$imperian_speed = 14; // Emperyan'in birim hizi
		$imperian_attack = 70; // Emperyan'in saldiri gucu
		$imperian_defense_infantry = 40; // Emperyan'in piyade savunmasi
		$imperian_defense_cavalry = 25; // Emperyan'in suvari savunmasi
		@$imperian_level = $_GET["imperian_level"]; // Emperyan'in seviyesi
		$imperian_level_attack = $imperian_attack * pow($level_effect,$imperian_level); // Emperyan'in seviyesine gore saldiri gucu
		$imperian_level_defense_infantry = $imperian_defense_infantry * pow($level_effect,$imperian_level); // Emperyan'in seviyesine gore piyade savunmasi
		$imperian_level_defense_cavalry = $imperian_defense_cavalry * pow($level_effect,$imperian_level); // Emperyan'in seviyesine gore suvari savunmasi
		
		$legati_wood = 140; // Equites Legati icin odun miktari
		$legati_clay = 160; // Equites Legati icin tugla miktari
		$legati_iron = 20; // Equites Legati icin demir miktari
		$legati_crop = 40; // Equites Legati icin tahil miktari
		$legati_upkeep = 2; // Equites Legati icin saatlik tahil tuketimi
		$legati_carrying_capacity = 0; // Equites Legati'nin tasima kapasitesi
		$legati_speed = 16; // Equites Legati'nin birim hizi
		$legati_attack = 0; // Equites Legati'nin saldiri gucu
		$legati_defense_infantry = 20; // Equites Legati'nin piyade savunmasi
		$legati_defense_cavalry = 10; // Equites Legati'nin suvari savunmasi
		@$legati_level = $_GET["legati_level"]; // Equites Legati'nin seviyesi
		$legati_level_attack = $legati_attack * pow($level_effect,$legati_level); // Equites Legati'nin seviyesine gore saldiri gucu
		$legati_level_defense_infantry = $legati_defense_infantry * pow($level_effect,$legati_level); // Equites Legati'nin seviyesine gore piyade savunmasi
		$legati_level_defense_cavalry = $legati_defense_cavalry * pow($level_effect,$legati_level); // Equites Legati'nin seviyesine gore suvari savunmasi

		$imperatoris_wood = 550; // Equites Imperatoris icin odun miktari
		$imperatoris_clay = 440; // Equites Imperatoris icin tugla miktari
		$imperatoris_iron = 320; // Equites Imperatoris icin demir miktari
		$imperatoris_crop = 100; // Equites Imperatoris icin tahil miktari
		$imperatoris_upkeep = 3; // Equites Imperatoris icin saatlik tahil tuketimi
		$imperatoris_carrying_capacity = 100; // Equites Imperatoris'in tasima kapasitesi
		$imperatoris_speed = 28; // Equites Imperatoris'in birim hizi
		$imperatoris_attack = 120; // Equites Imperatoris'in saldiri gucu
		$imperatoris_defense_infantry = 65; // Equites Imperatoris'in piyade savunmasi
		$imperatoris_defense_cavalry = 50; // Equites Imperatoris'in suvari savunmasi
		@$imperatoris_level = $_GET["imperatoris_level"]; // Equites Imperatoris'in seviyesi
		$imperatoris_level_attack = $imperatoris_attack * pow($level_effect,$imperatoris_level); // Equites Imperatoris'in seviyesine gore saldiri gucu
		$imperatoris_level_defense_infantry = $imperatoris_defense_infantry * pow($level_effect,$imperatoris_level); // Equites Imperatoris'in seviyesine gore piyade savunmasi
		$imperatoris_level_defense_cavalry = $imperatoris_defense_cavalry * pow($level_effect,$imperatoris_level); // Equites Imperatoris'in seviyesine gore suvari savunmasi

		$caesaris_wood = 550; // Equites Caesaris icin odun miktari
		$caesaris_clay = 640; // Equites Caesaris icin tugla miktari
		$caesaris_iron = 800; // Equites Caesaris icin demir miktari
		$caesaris_crop = 180; // Equites Caesaris icin tahil miktari
		$caesaris_upkeep = 4; // Equites Caesaris icin saatlik tahil tuketimi
		$caesaris_carrying_capacity = 70; // Equites Caesaris'in tasima kapasitesi
		$caesaris_speed = 20; // Equites Caesaris'in birim hizi
		$caesaris_attack = 180; // Equites Caesaris'in saldiri gucu
		$caesaris_defense_infantry = 80; // Equites Caesaris'in piyade savunmasi
		$caesaris_defense_cavalry = 105; // Equites Caesaris'in suvari savunmasi
		@$caesaris_level = $_GET["caesaris_level"]; // Equites Caesaris'in seviyesi
		$caesaris_level_attack = $caesaris_attack * pow($level_effect,$caesaris_level); // Equites Caesaris'in seviyesine gore saldiri gucu
		$caesaris_level_defense_infantry = $caesaris_defense_infantry * pow($level_effect,$caesaris_level); // Equites Caesaris'in seviyesine gore piyade savunmasi
		$caesaris_level_defense_cavalry = $caesaris_defense_cavalry * pow($level_effect,$caesaris_level); // Equites Caesaris'in seviyesine gore suvari savunmasi
		
		$battering_ram_wood = 900; // Kocbasi icin odun miktari
		$battering_ram_clay = 360; // Kocbasi icin tugla miktari
		$battering_ram_iron = 500; // Kocbasi icin demir miktari
		$battering_ram_crop = 70; // Kocbasi icin tahil miktari
		$battering_ram_upkeep = 3; // Kocbasi icin saatlik tahil tuketimi
		$battering_ram_carrying_capacity = 0; // Kocbasi'nin tasima kapasitesi
		$battering_ram_speed = 4; // Kocbasi'nin birim hizi
		$battering_ram_attack = 60; // Kocbasi'nin saldiri gucu
		$battering_ram_defense_infantry = 30; // Kocbasi'nin piyade savunmasi
		$battering_ram_defense_cavalry = 75; // Kocbasi'nin suvari savunmasi
		@$battering_ram_level = $_GET["battering_ram_level"]; // Kocbasi'nin seviyesi
		$battering_ram_level_attack = $battering_ram_attack * pow($level_effect,$battering_ram_level); // Kocbasi'nin seviyesine gore saldiri gucu
		$battering_ram_level_defense_infantry = $battering_ram_defense_infantry * pow($level_effect,$battering_ram_level); // Kocbasi'nin seviyesine gore piyade savunmasi
		$battering_ram_level_defense_cavalry = $battering_ram_defense_cavalry * pow($level_effect,$battering_ram_level); // Kocbasi'nin seviyesine gore suvari savunmasi
		
		$fire_catapult_wood = 950; // Ates Mancinigi icin odun miktari
		$fire_catapult_clay = 1350; // Ates Mancinigi icin tugla miktari
		$fire_catapult_iron = 600; // Ates Mancinigi icin demir miktari
		$fire_catapult_crop = 90; // Ates Mancinigi icin tahil miktari
		$fire_catapult_upkeep = 6; // Ates Mancinigi icin saatlik tahil tuketimi
		$fire_catapult_carrying_capacity = 0; // Ates Mancinigi'nin tasima kapasitesi
		$fire_catapult_speed = 3; // Ates Mancinigi'nin birim hizi
		$fire_catapult_attack = 75; // Ates Mancinigi'nin saldiri gucu
		$fire_catapult_defense_infantry = 60; // Ates Mancinigi'nin piyade savunmasi
		$fire_catapult_defense_cavalry = 10; // Ates Mancinigi'nin suvari savunmasi
		@$fire_catapult_level = $_GET["fire_catapult_level"]; // Ates Mancinigi'nin seviyesi
		$fire_catapult_level_attack = $fire_catapult_attack * pow($level_effect,$fire_catapult_level); // Ates Mancinigi'nin seviyesine gore saldiri gucu
		$fire_catapult_level_defense_infantry = $fire_catapult_defense_infantry * pow($level_effect,$fire_catapult_level); // Ates Mancinigi'nin seviyesine gore piyade savunmasi
		$fire_catapult_level_defense_cavalry = $fire_catapult_defense_cavalry * pow($level_effect,$fire_catapult_level); // Ates Mancinigi'nin seviyesine gore suvari savunmasi

		$senator_wood = 30750; // Senator icin odun miktari
		$senator_clay = 27200; // Senator icin tugla miktari
		$senator_iron = 45000; // Senator icin demir miktari
		$senator_crop = 37500; // Senator icin tahil miktari
		$senator_upkeep = 5; // Senator icin saatlik tahil tuketimi
		$senator_carrying_capacity = 0; // Senator'un tasima kapasitesi (hâsâ!)
		$senator_speed = 4; // Senator'un birim hizi
		$senator_attack = 50; // Senator'un saldiri gucu
		$senator_defense_infantry = 40; // Senator'un piyade savunmasi
		$senator_defense_cavalry = 30; // Senator'un suvari savunmasi
		@$senator_level = $_GET["senator_level"]; // Senator'un seviyesi
		$senator_level_attack = $senator_attack * pow($level_effect,$senator_level); // Senator'un seviyesine gore saldiri gucu
		$senator_level_defense_infantry = $senator_defense_infantry * pow($level_effect,$senator_level); // Senator'un seviyesine gore piyade savunmasi
		$senator_level_defense_cavalry = $senator_defense_cavalry * pow($level_effect,$senator_level); // Senator'un seviyesine gore suvari savunmasi

		$settler_wood = 5800; // Gocmen icin odun miktari
		$settler_clay = 5300; // Gocmen icin tugla miktari
		$settler_iron = 7200; // Gocmen icin demir miktari
		$settler_crop = 5500; // Gocmen icin tahil miktari
		$settler_upkeep = 1; // Gocmen icin saatlik tahil tuketimi
		$settler_carrying_capacity = 3000; // Gocmen'in tasima kapasitesi
		$settler_speed = 5; // Gocmen'in birim hizi
		$settler_attack = 0; // Gocmen'in saldiri gucu
		$settler_defense_infantry = 80; // Gocmen'in piyade savunmasi
		$settler_defense_cavalry = 80; // Gocmen'in suvari savunmasi
		@$settler_level = $_GET["settler_level"]; // Gocmen'in seviyesi
		$settler_level_attack = $settler_attack * pow($level_effect,$settler_level); // Gocmen'in seviyesine gore saldiri gucu
		$settler_level_defense_infantry = $settler_defense_infantry * pow($level_effect,$settler_level); // Gocmen'in seviyesine gore piyade savunmasi
		$settler_level_defense_cavalry = $settler_defense_cavalry * pow($level_effect,$settler_level); // Gocmen'in seviyesine gore suvari savunmasi
		
// Kahraman silahi

		if		( $hero_weapon == "short_sword_of_the_legionnaire" ) $legionnaire_hero_effeckt = 3;
		elseif	( $hero_weapon == "sword_of_the_legionnaire" ) $legionnaire_hero_effeckt = 4;
		elseif	( $hero_weapon == "long_sword_of_the_legionnaire" ) $legionnaire_hero_effeckt = 5;
		else 	  $legionnaire_hero_effeckt = 0;
		
		if		( $hero_weapon == "short_sword_of_the_praetorian" ) $praetorian_hero_effeckt = 3;
		elseif	( $hero_weapon == "sword_of_the_praetorian" ) $praetorian_hero_effeckt = 4;
		elseif	( $hero_weapon == "long_sword_of_the_praetorian" ) $praetorian_hero_effeckt = 5;
		else	  $praetorian_hero_effeckt = 0;
		
		if		( $hero_weapon == "short_sword_of_the_imperian" ) $imperian_hero_effeckt = 3;
		elseif	( $hero_weapon == "sword_of_the_imperian" ) $imperian_hero_effeckt = 4;
		elseif	( $hero_weapon == "long_sword_of_the_imperian" ) $imperian_hero_effeckt = 5;
		else	  $imperian_hero_effeckt = 0;
		
		if		( $hero_weapon == "short_sword_of_the_imperatoris" ) $imperatoris_hero_effeckt = 3;
		elseif	( $hero_weapon == "sword_of_the_imperatoris" ) $imperatoris_hero_effeckt = 4;
		elseif	( $hero_weapon == "long_sword_of_the_imperatoris" ) $imperatoris_hero_effeckt = 5;
		else	  $imperatoris_hero_effeckt = 0;

		if		( $hero_weapon == "light_lance_of_the_caesaris" ) $caesaris_hero_effeckt = 3;
		elseif	( $hero_weapon == "lance_of_the_caesaris" ) $caesaris_hero_effeckt = 4;
		elseif	( $hero_weapon == "heavy_lance_of_the_caesaris" ) $caesaris_hero_effeckt = 5;
		else	  $caesaris_hero_effeckt = 0;
		
// Goreli mumkun
		
		$possible_legionnaire = floor(min($wood/$legionnaire_wood, $clay/$legionnaire_clay, $iron/$legionnaire_iron, $crop/$legionnaire_crop)); // Uretilmesi mumkun olan Lejyoner sayisi
		$possible_praetorian = floor(min($wood/$praetorian_wood, $clay/$praetorian_clay, $iron/$praetorian_iron, $crop/$praetorian_crop)); // Uretilmesi mumkun olan Pretoryan sayisi
		$possible_imperian = floor(min($wood/$imperian_wood, $clay/$imperian_clay, $iron/$imperian_iron, $crop/$imperian_crop)); // Uretilmesi mumkun olan Emperyan sayisi
		$possible_legati = floor(min($wood/$legati_wood, $clay/$legati_clay, $iron/$legati_iron, $crop/$legati_crop)); // Uretilmesi mumkun olan Equites Legati sayisi
		$possible_imperatoris = floor(min($wood/$imperatoris_wood, $clay/$imperatoris_clay, $iron/$imperatoris_iron, $crop/$imperatoris_crop)); // Uretilmesi mumkun olan Equites Imperatoris sayisi
		$possible_caesaris = floor(min($wood/$caesaris_wood, $clay/$caesaris_clay, $iron/$caesaris_iron, $crop/$caesaris_crop)); // Uretilmesi mumkun olan Equites Caesaris sayisi
		$possible_battering_ram = floor(min($wood/$battering_ram_wood, $clay/$battering_ram_clay, $iron/$battering_ram_iron, $crop/$battering_ram_crop)); // Uretilmesi mumkun olan Kocbasi sayisi
		$possible_fire_catapult = floor(min($wood/$fire_catapult_wood, $clay/$fire_catapult_clay, $iron/$fire_catapult_iron, $crop/$fire_catapult_crop)); // Uretilmesi mumkun olan Ates Mancinigi sayisi
		$possible_senator = floor(min($wood/$senator_wood, $clay/$senator_clay, $iron/$senator_iron, $crop/$senator_crop)); // Uretilmesi mumkun olan Senator sayisi
		$possible_settler = floor(min($wood/$settler_wood, $clay/$settler_clay, $iron/$settler_iron, $crop/$settler_crop)); // Uretilmesi mumkun olan Gocmen sayisi

		$format_possible_legionnaire = number_format($possible_legionnaire);
		$format_possible_praetorian = number_format($possible_praetorian);
		$format_possible_imperian = number_format($possible_imperian);
		$format_possible_legati = number_format($possible_legati);
		$format_possible_imperatoris = number_format($possible_imperatoris);
		$format_possible_caesaris = number_format($possible_caesaris);
		$format_possible_battering_ram = number_format($possible_battering_ram);
		$format_possible_fire_catapult = number_format($possible_fire_catapult);
		$format_possible_senator = number_format($possible_senator);
		$format_possible_settler = number_format($possible_settler);

// Toplam bakim

		$total_legionnaire_upkeep = $possible_legionnaire * $legionnaire_upkeep;
		$total_praetorian_upkeep = $possible_praetorian * $praetorian_upkeep;
		$total_imperian_upkeep = $possible_imperian * $imperian_upkeep;
		$total_legati_upkeep = $possible_legati * $legati_upkeep;
		$total_imperatoris_upkeep = $possible_imperatoris * $imperatoris_upkeep;
		$total_caesaris_upkeep = $possible_caesaris * $caesaris_upkeep;
		$total_battering_ram_upkeep = $possible_battering_ram * $battering_ram_upkeep;
		$total_fire_catapult_upkeep = $possible_fire_catapult * $fire_catapult_upkeep;
		$total_senator_upkeep = $possible_senator * $senator_upkeep;
		$total_settler_upkeep = $possible_settler * $settler_upkeep;
		
		$format_legionnaire_upkeep = number_format($total_legionnaire_upkeep);
		$format_praetorian_upkeep = number_format($total_praetorian_upkeep);
		$format_imperian_upkeep = number_format($total_imperian_upkeep);
		$format_legati_upkeep = number_format($total_legati_upkeep);
		$format_imperatoris_upkeep = number_format($total_imperatoris_upkeep);
		$format_caesaris_upkeep = number_format($total_caesaris_upkeep);
		$format_battering_ram_upkeep = number_format($total_battering_ram_upkeep);
		$format_fire_catapult_upkeep = number_format($total_fire_catapult_upkeep);
		$format_senator_upkeep = number_format($total_senator_upkeep);
		$format_settler_upkeep = number_format($total_settler_upkeep);

// Toplam tasima

		$total_legionnaire_carrying_capacity = $possible_legionnaire * $legionnaire_carrying_capacity;
		$total_praetorian_carrying_capacity = $possible_praetorian * $praetorian_carrying_capacity;
		$total_imperian_carrying_capacity = $possible_imperian * $imperian_carrying_capacity;
		$total_legati_carrying_capacity = $possible_legati * $legati_carrying_capacity;
		$total_imperatoris_carrying_capacity = $possible_imperatoris * $imperatoris_carrying_capacity;
		$total_caesaris_carrying_capacity = $possible_caesaris * $caesaris_carrying_capacity;
		$total_battering_ram_carrying_capacity = $possible_battering_ram * $battering_ram_carrying_capacity;
		$total_fire_catapult_carrying_capacity = $possible_fire_catapult * $fire_catapult_carrying_capacity;
		$total_senator_carrying_capacity = $possible_senator * $senator_carrying_capacity;
		$total_settler_carrying_capacity = $possible_settler * $settler_carrying_capacity;

		$format_legionnaire_carrying_capacity = number_format($total_legionnaire_carrying_capacity); 	
		$format_praetorian_carrying_capacity = number_format($total_praetorian_carrying_capacity); 	
		$format_imperian_carrying_capacity = number_format($total_imperian_carrying_capacity); 	
		$format_legati_carrying_capacity = number_format($total_legati_carrying_capacity); 	
		$format_imperatoris_carrying_capacity = number_format($total_imperatoris_carrying_capacity); 	
		$format_caesaris_carrying_capacity = number_format($total_caesaris_carrying_capacity); 	
		$format_battering_ram_carrying_capacity = number_format($total_battering_ram_carrying_capacity); 	
		$format_fire_catapult_carrying_capacity = number_format($total_fire_catapult_carrying_capacity); 	
		$format_senator_carrying_capacity = number_format($total_senator_carrying_capacity); 	
		$format_settler_carrying_capacity = number_format($total_settler_carrying_capacity);
		
// Hesapla

		$total_legionnaire_attack = $possible_legionnaire * ($legionnaire_level_attack + $legionnaire_hero_effeckt);
		$total_legionnaire_defense_infantry = $possible_legionnaire * ($legionnaire_level_defense_infantry + $legionnaire_hero_effeckt);
		$total_legionnaire_defense_cavalry = $possible_legionnaire * ($legionnaire_level_defense_cavalry + $legionnaire_hero_effeckt);
		
		$format_legionnaire_attack = number_format($total_legionnaire_attack);
		$format_legionnaire_defense_infantry = number_format($total_legionnaire_defense_infantry);
		$format_legionnaire_defense_cavalry = number_format($total_legionnaire_defense_cavalry);

		$total_praetorian_attack = $possible_praetorian * ($praetorian_level_attack + $praetorian_hero_effeckt);
		$total_praetorian_defense_infantry = $possible_praetorian * ($praetorian_level_defense_infantry + $praetorian_hero_effeckt);
		$total_praetorian_defense_cavalry = $possible_praetorian * ($praetorian_level_defense_cavalry + $praetorian_hero_effeckt);
		
		$format_praetorian_attack = number_format($total_praetorian_attack);
		$format_praetorian_defense_infantry = number_format($total_praetorian_defense_infantry);
		$format_praetorian_defense_cavalry = number_format($total_praetorian_defense_cavalry);

		$total_imperian_attack = $possible_imperian * ($imperian_level_attack + $imperian_hero_effeckt);
		$total_imperian_defense_infantry = $possible_imperian * ($imperian_level_defense_infantry + $imperian_hero_effeckt);
		$total_imperian_defense_cavalry = $possible_imperian * ($imperian_level_defense_cavalry + $imperian_hero_effeckt);
		
		$format_imperian_attack = number_format($total_imperian_attack);
		$format_imperian_defense_infantry = number_format($total_imperian_defense_infantry);
		$format_imperian_defense_cavalry = number_format($total_imperian_defense_cavalry);

		$total_imperatoris_attack = $possible_imperatoris * ($imperatoris_level_attack + $imperatoris_hero_effeckt);
		$total_imperatoris_defense_infantry = $possible_imperatoris * ($imperatoris_level_defense_infantry + $imperatoris_hero_effeckt);
		$total_imperatoris_defense_cavalry = $possible_imperatoris * ($imperatoris_level_defense_cavalry + $imperatoris_hero_effeckt);

		$format_imperatoris_attack = number_format($total_imperatoris_attack);
		$format_imperatoris_defense_infantry = number_format($total_imperatoris_defense_infantry);
		$format_imperatoris_defense_cavalry = number_format($total_imperatoris_defense_cavalry);
		
		$total_caesaris_attack = $possible_caesaris * ($caesaris_level_attack + $caesaris_hero_effeckt);
		$total_caesaris_defense_infantry = $possible_caesaris * ($caesaris_level_defense_infantry + $caesaris_hero_effeckt);
		$total_caesaris_defense_cavalry = $possible_caesaris * ($caesaris_level_defense_cavalry + $caesaris_hero_effeckt);

		$format_caesaris_attack = number_format($total_caesaris_attack);
		$format_caesaris_defense_infantry = number_format($total_caesaris_defense_infantry);
		$format_caesaris_defense_cavalry = number_format($total_caesaris_defense_cavalry);
		
		$total_legati_attack = $possible_legati * $legati_level_attack;
		$total_legati_defense_infantry = $possible_legati * $legati_level_defense_infantry;
		$total_legati_defense_cavalry = $possible_legati * $legati_level_defense_cavalry;

		$format_legati_attack = number_format($total_legati_attack);
		$format_legati_defense_infantry = number_format($total_legati_defense_infantry);
		$format_legati_defense_cavalry = number_format($total_legati_defense_cavalry);
		
		$total_battering_ram_attack = $possible_battering_ram * $battering_ram_level_attack;
		$total_battering_ram_defense_infantry = $possible_battering_ram * $battering_ram_level_defense_infantry;
		$total_battering_ram_defense_cavalry = $possible_battering_ram * $battering_ram_level_defense_cavalry;

		$format_battering_ram_attack = number_format($total_battering_ram_attack);
		$format_battering_ram_defense_infantry = number_format($total_battering_ram_defense_infantry);
		$format_battering_ram_defense_cavalry = number_format($total_battering_ram_defense_cavalry);
		
		$total_fire_catapult_attack = $possible_fire_catapult * $fire_catapult_level_attack;
		$total_fire_catapult_defense_infantry = $possible_fire_catapult * $fire_catapult_level_defense_infantry;
		$total_fire_catapult_defense_cavalry = $possible_fire_catapult * $fire_catapult_level_defense_cavalry;

		$format_fire_catapult_attack = number_format($total_fire_catapult_attack);
		$format_fire_catapult_defense_infantry = number_format($total_fire_catapult_defense_infantry);
		$format_fire_catapult_defense_cavalry = number_format($total_fire_catapult_defense_cavalry);
		
		$total_senator_attack = $possible_senator * $senator_level_attack;
		$total_senator_defense_infantry = $possible_senator * $senator_level_defense_infantry;
		$total_senator_defense_cavalry = $possible_senator * $senator_level_defense_cavalry;

		$format_senator_attack = number_format($total_senator_attack);
		$format_senator_defense_infantry = number_format($total_senator_defense_infantry);
		$format_senator_defense_cavalry = number_format($total_senator_defense_cavalry);

		$total_settler_attack = $possible_settler * $settler_level_attack;
		$total_settler_defense_infantry = $possible_settler * $settler_level_defense_infantry;
		$total_settler_defense_cavalry = $possible_settler * $settler_level_defense_cavalry;

		$format_settler_attack = number_format($total_settler_attack);
		$format_settler_defense_infantry = number_format($total_settler_defense_infantry);
		$format_settler_defense_cavalry = number_format($total_settler_defense_cavalry);

// Oneri

		$max_total_attack = max($total_legionnaire_attack, $total_praetorian_attack, $total_imperian_attack, $total_imperatoris_attack, $total_caesaris_attack, $total_legati_attack, $total_battering_ram_attack, $total_fire_catapult_attack, $total_senator_attack, $total_settler_attack);
		$max_total_defense_infantry = max($total_legionnaire_defense_infantry, $total_praetorian_defense_infantry, $total_imperatoris_defense_infantry, $total_imperatoris_defense_infantry, $total_caesaris_defense_infantry, $total_legati_defense_infantry, $total_battering_ram_defense_infantry, $total_fire_catapult_defense_infantry, $total_senator_defense_infantry, $total_settler_defense_infantry);
		$max_total_defense_cavalry = max($total_legionnaire_defense_cavalry, $total_praetorian_defense_cavalry, $total_imperatoris_defense_cavalry, $total_imperatoris_defense_cavalry, $total_caesaris_defense_cavalry, $total_legati_defense_cavalry, $total_battering_ram_defense_cavalry, $total_fire_catapult_defense_cavalry, $total_senator_defense_cavalry, $total_settler_defense_cavalry);
		$max_total_carrying_capacity = max($total_legionnaire_carrying_capacity, $total_praetorian_carrying_capacity, $total_imperian_carrying_capacity, $total_imperatoris_carrying_capacity, $total_caesaris_carrying_capacity);
		$min_total_upkeep = min($total_legionnaire_upkeep, $total_praetorian_upkeep, $total_imperian_upkeep, $total_imperatoris_upkeep, $total_caesaris_upkeep, $total_legati_upkeep, $total_battering_ram_upkeep, $total_fire_catapult_upkeep); // bu satir gereksiz

		if		( $total_legionnaire_attack == $max_total_attack ) $advice_max_attack = _('Legionnaire');
		elseif	( $total_praetorian_attack == $max_total_attack ) $advice_max_attack = _('Praetorian');
		elseif	( $total_imperian_attack == $max_total_attack ) $advice_max_attack = _('Imperian');
		elseif	( $total_legati_attack == $max_total_attack ) $advice_max_attack =  _('Equites Legati');
		elseif	( $total_imperatoris_attack == $max_total_attack ) $advice_max_attack = _('Equites Imperatoris');
		elseif	( $total_caesaris_attack == $max_total_attack ) $advice_max_attack = _('Equites Caesaris');
		elseif	( $total_battering_ram_attack == $max_total_attack ) $advice_max_attack = _('Battering Ram');
		elseif	( $total_fire_catapult_attack == $max_total_attack ) $advice_max_attack = _('Fire Catapult');
		elseif	( $total_senator_attack == $max_total_attack ) $advice_max_attack = _('Senator');
		elseif	( $total_settler_attack == $max_total_attack ) $advice_max_attack = _('Settler');

// Onerilen toplam saldiri gucune sahip birimin toplam saatlik tahil tuketimi

			if		( $total_legionnaire_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_legionnaire_upkeep;
			elseif	( $total_praetorian_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_praetorian_upkeep;
			elseif	( $total_imperian_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_imperatoris_upkeep;
			elseif	( $total_legati_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_legati_upkeep;
			elseif	( $total_imperatoris_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_imperatoris_upkeep;
			elseif	( $total_caesaris_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_caesaris_upkeep;
			elseif	( $total_battering_ram_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_battering_ram_upkeep;
			elseif	( $total_fire_catapult_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_fire_catapult_upkeep;
			elseif	( $total_senator_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_senator_upkeep;
			elseif	( $total_settler_attack == $max_total_attack ) $advice_max_attack_total_upkeep = $total_settler_upkeep;
		
		if		( $total_legionnaire_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = _('Legionnaire');
		elseif	( $total_praetorian_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = _('Praetorian');
		elseif	( $total_imperian_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = _('Imperian');
		elseif	( $total_legati_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry =  _('Equites Legati');
		elseif	( $total_imperatoris_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = _('Equites Imperatoris');
		elseif	( $total_caesaris_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = _('Equites Caesaris');
		elseif	( $total_battering_ram_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = _('Battering Ram');
		elseif	( $total_fire_catapult_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = _('Fire Catapult');
		elseif	( $total_senator_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = _('Senator');
		elseif	( $total_settler_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry = _('Settler');
		
// Onerilen toplam piyade savunma gucune sahip birimin toplam saatlik tahil tuketimi

			if		( $total_legionnaire_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_legionnaire_upkeep;
			elseif	( $total_praetorian_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_praetorian_upkeep;
			elseif	( $total_imperian_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_imperatoris_upkeep;
			elseif	( $total_legati_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_legati_upkeep;
			elseif	( $total_imperatoris_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_imperatoris_upkeep;
			elseif	( $total_caesaris_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_caesaris_upkeep;
			elseif	( $total_battering_ram_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_battering_ram_upkeep;
			elseif	( $total_fire_catapult_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_fire_catapult_upkeep;
			elseif	( $total_senator_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_senator_upkeep;
			elseif	( $total_settler_defense_infantry == $max_total_defense_infantry ) $advice_max_defense_infantry_total_upkeep = $total_settler_upkeep;

		if		( $total_legionnaire_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = _('Legionnaire');
		elseif	( $total_praetorian_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = _('Praetorian');
		elseif	( $total_imperian_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = _('Imperian');
		elseif	( $total_legati_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry =  _('Equites Legati');
		elseif	( $total_imperatoris_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = _('Equites Imperatoris');
		elseif	( $total_caesaris_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = _('Equites Caesaris');
		elseif	( $total_battering_ram_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = _('Battering Ram');
		elseif	( $total_fire_catapult_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = _('Fire Catapult');
		elseif	( $total_senator_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = _('Senator');
		elseif	( $total_settler_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry = _('Settler');

// Onerilen toplam suvari savunma gucune sahip birimin toplam saatlik tahil tuketimi

			if		( $total_legionnaire_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_legionnaire_upkeep;
			elseif	( $total_praetorian_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_praetorian_upkeep;
			elseif	( $total_imperian_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_imperatoris_upkeep;
			elseif	( $total_legati_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_legati_upkeep;
			elseif	( $total_imperatoris_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_imperatoris_upkeep;
			elseif	( $total_caesaris_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_caesaris_upkeep;
			elseif	( $total_battering_ram_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_battering_ram_upkeep;
			elseif	( $total_fire_catapult_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_fire_catapult_upkeep;
			elseif	( $total_senator_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_senator_upkeep;
			elseif	( $total_settler_defense_cavalry == $max_total_defense_cavalry ) $advice_max_defense_cavalry_total_upkeep = $total_settler_upkeep;

// Onerilen toplam tasima kapasitesine sahip birimin toplam saatlik tahil tuketimi

		if		( $total_legionnaire_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = _('Legionnaire');
		elseif	( $total_praetorian_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = _('Praetorian');
		elseif	( $total_imperian_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = _('Imperian');
		elseif	( $total_imperatoris_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = _('Equites Imperatoris');
		elseif	( $total_caesaris_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity = _('Equites Caesaris');

			if		( $total_legionnaire_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_legionnaire_upkeep;
			elseif	( $total_praetorian_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_praetorian_upkeep;
			elseif	( $total_imperian_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_imperatoris_upkeep;
			elseif	( $total_imperatoris_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_imperatoris_upkeep;
			elseif	( $total_caesaris_carrying_capacity == $max_total_carrying_capacity ) $advice_max_carrying_capacity_total_upkeep = $total_caesaris_upkeep;

// Birimlerin toplam saldiri guclerinin taviye edilen toplam saldiri gucune oranlari

		@$total_legionnaire_attack_rate_max_attack_for_upkeep = ($total_legionnaire_attack * $advice_max_attack_total_upkeep) / $total_legionnaire_upkeep;
		@$total_praetorian_attack_rate_max_attack_for_upkeep = ($total_praetorian_attack * $advice_max_attack_total_upkeep) / $total_praetorian_upkeep;
		@$total_imperian_attack_rate_max_attack_for_upkeep = ($total_imperian_attack * $advice_max_attack_total_upkeep) / $total_imperian_upkeep;
		@$total_legati_attack_rate_max_attack_for_upkeep = ($total_legati_attack * $advice_max_attack_total_upkeep) / $total_legati_upkeep;
		@$total_imperatoris_attack_rate_max_attack_for_upkeep = ($total_imperatoris_attack * $advice_max_attack_total_upkeep) / $total_imperatoris_upkeep;
		@$total_caesaris_attack_rate_max_attack_for_upkeep = ($total_caesaris_attack * $advice_max_attack_total_upkeep) / $total_caesaris_upkeep;
		@$total_battering_ram_attack_rate_max_attack_for_upkeep = ($total_battering_ram_attack * $advice_max_attack_total_upkeep) / $total_battering_ram_upkeep;
		@$total_fire_catapult_attack_rate_max_attack_for_upkeep = ($total_fire_catapult_attack * $advice_max_attack_total_upkeep) / $total_fire_catapult_upkeep;
		@$total_senator_attack_rate_max_attack_for_upkeep = ($total_senator_attack * $advice_max_attack_total_upkeep) / $total_senator_upkeep;
		@$total_settler_attack_rate_max_attack_for_upkeep = ($total_settler_attack * $advice_max_attack_total_upkeep) / $total_settler_upkeep;
		
// Birimlerin toplam piyade savunma guclerinin taviye edilen toplam piyade savunma gucune oranlari

		@$total_legionnaire_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_legionnaire_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_legionnaire_upkeep;
		@$total_praetorian_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_praetorian_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_praetorian_upkeep;
		@$total_imperian_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_imperian_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_imperian_upkeep;
		@$total_legati_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_legati_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_legati_upkeep;
		@$total_imperatoris_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_imperatoris_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_imperatoris_upkeep;
		@$total_caesaris_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_caesaris_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_caesaris_upkeep;
		@$total_battering_ram_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_battering_ram_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_battering_ram_upkeep;
		@$total_fire_catapult_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_fire_catapult_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_fire_catapult_upkeep;
		@$total_senator_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_senator_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_senator_upkeep;
		@$total_settler_defense_infantry_rate_max_defense_infantry_for_upkeep = ($total_settler_defense_infantry * $advice_max_defense_infantry_total_upkeep) / $total_settler_upkeep;

// Birimlerin toplam suvari savunma guclerinin taviye edilen toplam suvari savunma gucune oranlari

		@$total_legionnaire_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_legionnaire_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_legionnaire_upkeep;
		@$total_praetorian_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_praetorian_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_praetorian_upkeep;
		@$total_imperian_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_imperian_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_imperian_upkeep;
		@$total_legati_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_legati_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_legati_upkeep;
		@$total_imperatoris_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_imperatoris_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_imperatoris_upkeep;
		@$total_caesaris_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_caesaris_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_caesaris_upkeep;
		@$total_battering_ram_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_battering_ram_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_battering_ram_upkeep;
		@$total_fire_catapult_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_fire_catapult_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_fire_catapult_upkeep;
		@$total_senator_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_senator_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_senator_upkeep;
		@$total_settler_defense_cavalry_rate_max_defense_cavalry_for_upkeep = ($total_settler_defense_cavalry * $advice_max_defense_cavalry_total_upkeep) / $total_settler_upkeep;
		
// Birimlerin toplam tasima kapasitelerinin taviye edilen toplam tasima kapasitesine oranlari

		@$total_legionnaire_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_legionnaire_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_legionnaire_upkeep;
		@$total_praetorian_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_praetorian_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_praetorian_upkeep;
		@$total_imperian_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_imperian_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_imperian_upkeep;
		@$total_imperatoris_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_imperatoris_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_imperatoris_upkeep;
		@$total_caesaris_carrying_capacity_rate_max_carrying_capacity_for_upkeep = ($total_caesaris_carrying_capacity * $advice_max_carrying_capacity_total_upkeep) / $total_caesaris_upkeep;
	
// Tahil sorunu icin onerilen en yuksek toplam saldiri, piyade savunma ve suvari savunma gucu ile birimleri
		
		$advice_rate_attack = max($total_legionnaire_attack_rate_max_attack_for_upkeep, $total_praetorian_attack_rate_max_attack_for_upkeep, $total_imperian_attack_rate_max_attack_for_upkeep, $total_legati_attack_rate_max_attack_for_upkeep, $total_imperatoris_attack_rate_max_attack_for_upkeep, $total_caesaris_attack_rate_max_attack_for_upkeep, $total_battering_ram_attack_rate_max_attack_for_upkeep, $total_fire_catapult_attack_rate_max_attack_for_upkeep, $total_senator_attack_rate_max_attack_for_upkeep, $total_settler_attack_rate_max_attack_for_upkeep);
		$advice_rate_defense_infantry = max($total_legionnaire_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_praetorian_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_imperian_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_legati_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_imperatoris_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_caesaris_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_battering_ram_defense_infantry_rate_max_defense_infantry_for_upkeep, $total_fire_catapult_defense_infantry_rate_max_defense_infantry_for_upkeep);
		$advice_rate_defense_cavalry = max($total_legionnaire_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_praetorian_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_imperian_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_legati_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_imperatoris_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_caesaris_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_battering_ram_defense_cavalry_rate_max_defense_cavalry_for_upkeep, $total_fire_catapult_defense_cavalry_rate_max_defense_cavalry_for_upkeep);
		$advice_rate_carrying_capacity = max($total_legionnaire_carrying_capacity_rate_max_carrying_capacity_for_upkeep, $total_praetorian_carrying_capacity_rate_max_carrying_capacity_for_upkeep, $total_imperian_carrying_capacity_rate_max_carrying_capacity_for_upkeep, $total_imperatoris_carrying_capacity_rate_max_carrying_capacity_for_upkeep, $total_caesaris_carrying_capacity_rate_max_carrying_capacity_for_upkeep);

		if		( $advice_rate_attack == $total_legionnaire_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = _('Legionnaire');
		elseif	( $advice_rate_attack == $total_praetorian_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = _('Praetorian');
		elseif	( $advice_rate_attack == $total_imperian_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = _('Imperian');
		elseif	( $advice_rate_attack == $total_legati_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = _('Equites Legati');
		elseif	( $advice_rate_attack == $total_imperatoris_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = _('Equites Imperatoris');
		elseif	( $advice_rate_attack == $total_caesaris_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = _('Equites Caesaris');
		elseif	( $advice_rate_attack == $total_battering_ram_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = _('Battering Ram');
		elseif	( $advice_rate_attack == $total_fire_catapult_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = _('Fire Catapult');
		elseif	( $advice_rate_attack == $total_senator_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = _('Senator');
		elseif	( $advice_rate_attack == $total_settler_attack_rate_max_attack_for_upkeep ) $advice_rate_attack_unit = _('Settler');
		
		if		( $advice_rate_defense_infantry == $total_legionnaire_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = _('Legionnaire');
		elseif	( $advice_rate_defense_infantry == $total_praetorian_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = _('Praetorian');
		elseif	( $advice_rate_defense_infantry == $total_imperian_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = _('Imperian');
		elseif	( $advice_rate_defense_infantry == $total_legati_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = _('Equites Legati');
		elseif	( $advice_rate_defense_infantry == $total_imperatoris_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = _('Equites Imperatoris');
		elseif	( $advice_rate_defense_infantry == $total_caesaris_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = _('Equites Caesaris');
		elseif	( $advice_rate_defense_infantry == $total_battering_ram_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = _('Battering Ram');
		elseif	( $advice_rate_defense_infantry == $total_fire_catapult_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = _('Fire Catapult');
		elseif	( $advice_rate_defense_infantry == $total_senator_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = _('Senator');
		elseif	( $advice_rate_defense_infantry == $total_settler_defense_infantry_rate_max_defense_infantry_for_upkeep ) $advice_rate_defense_infantry_unit = _('Settler');

		if		( $advice_rate_defense_cavalry == $total_legionnaire_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = _('Legionnaire');
		elseif	( $advice_rate_defense_cavalry == $total_praetorian_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = _('Praetorian');
		elseif	( $advice_rate_defense_cavalry == $total_imperian_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = _('Imperian');
		elseif	( $advice_rate_defense_cavalry == $total_legati_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = _('Equites Legati');
		elseif	( $advice_rate_defense_cavalry == $total_imperatoris_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = _('Equites Imperatoris');
		elseif	( $advice_rate_defense_cavalry == $total_caesaris_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = _('Equites Caesaris');
		elseif	( $advice_rate_defense_cavalry == $total_battering_ram_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = _('Battering Ram');
		elseif	( $advice_rate_defense_cavalry == $total_fire_catapult_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = _('Fire Catapult');
		elseif	( $advice_rate_defense_cavalry == $total_senator_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = _('Senator');
		elseif	( $advice_rate_defense_cavalry == $total_settler_defense_cavalry_rate_max_defense_cavalry_for_upkeep ) $advice_rate_defense_cavalry_unit = _('Settler');

		if		( $advice_rate_carrying_capacity == $total_legionnaire_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = _('Legionnaire');
		elseif	( $advice_rate_carrying_capacity == $total_praetorian_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = _('Praetorian');
		elseif	( $advice_rate_carrying_capacity == $total_imperian_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = _('Imperian');
		elseif	( $advice_rate_carrying_capacity == $total_imperatoris_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = _('Equites Imperatoris');
		elseif	( $advice_rate_carrying_capacity == $total_caesaris_carrying_capacity_rate_max_carrying_capacity_for_upkeep ) $advice_rate_carrying_capacity_unit = _('Equites Caesaris');
	
// Ceviri metinleri
		
		$locale_units = _('Units');
		$locale_quantity = _('Quantity');
		$locale_speed = _('Speed');
		$locale_total_upkeep = _('Total upkeep');
		$locale_total_carrying_capacity = _('Total carrying capacity');
		$locale_total_attack_force = _('Total attack force');
		$locale_total_infantry_defense_force = _('Total infantry defense force');
		$locale_total_cavalry_defense_force = _('Total cavalry defense force');
		$locale_legionnaire = _('Legionnaire');
		$locale_praetorian = _('Praetorian');
		$locale_imperian = _('Imperian');
		$locale_legati = _('Equites Legati');
		$locale_imperatoris = _('Equites Imperatoris');
		$locale_caesaris = _('Equites Caesaris');
		$locale_battering_ram = _('Battering Ram');
		$locale_fire_catapult = _('Fire Catapult');
		$locale_senator = _('Senator');
		$locale_settler = _('Settler');
		
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
		
// Cikti tablosu
		
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
					<th width="100px"><a class="tooltip-right" data-tooltip="$locale_quantity"><img class="quantity" src="/images/x.gif" /></a></th>
					<th width="100px"><a class="tooltip-right" data-tooltip="$locale_speed"><img class="speed" src="/images/x.gif" /></a></th>
					<th width="100px"><a class="tooltip-right" data-tooltip="$locale_total_upkeep"><img class="upkeep" src="/images/x.gif" /></a></th>
					<th width="100px"><a class="tooltip-right" data-tooltip="$locale_total_carrying_capacity"><img class="carry" src="/images/x.gif" /></a></th>
					<th width="100px"><a class="tooltip-left" data-tooltip="$locale_total_attack_force"><img class="attack" src="/images/x.gif" /></a></th>
					<th width="100px"><a class="tooltip-left" data-tooltip="$locale_total_infantry_defense_force"><img class="inf-def" src="/images/x.gif" /></a></th>
					<th width="100px"><a class="tooltip-left" data-tooltip="$locale_total_cavalry_defense_force"><img class="cav-def" src="/images/x.gif" /></a></th>
				</tr>
				<tr>
					<td class="table-units">$locale_legionnaire</td>
					<td><a class="tooltip-right" data-tooltip="$locale_legionnaire"><img class="legionnaire" src="/images/x.gif" /></a></td>
					<td>$format_possible_legionnaire</td>
					<td>$legionnaire_speed</td>
					<td>$format_legionnaire_upkeep</td>
					<td>$format_legionnaire_carrying_capacity</td>
					<td>$format_legionnaire_attack</td>
					<td>$format_legionnaire_defense_infantry</td>
					<td>$format_legionnaire_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_praetorian</td>
					<td><a class="tooltip-right" data-tooltip="$locale_praetorian"><img class="praetorian" src="/images/x.gif" /></a></td>
					<td>$format_possible_praetorian</td>
					<td>$praetorian_speed</td>
					<td>$format_praetorian_upkeep</td>
					<td>$format_praetorian_carrying_capacity</td>
					<td>$format_praetorian_attack</td>
					<td>$format_praetorian_defense_infantry</td>
					<td>$format_praetorian_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_imperian</td>
					<td><a class="tooltip-right" data-tooltip="$locale_imperian"><img class="imperian" src="/images/x.gif" /></a></td>
					<td>$format_possible_imperian</td>
					<td>$imperian_speed</td>
					<td>$format_imperian_upkeep</td>
					<td>$format_imperian_carrying_capacity</td>
					<td>$format_imperian_attack</td>
					<td>$format_imperian_defense_infantry</td>
					<td>$format_imperian_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_legati</td>
					<td><a class="tooltip-right" data-tooltip="$locale_legati"><img class="equites-legati" src="/images/x.gif" /></a></td>
					<td>$format_possible_legati</td>
					<td>$legati_speed</td>
					<td>$format_legati_upkeep</td>
					<td>$format_legati_carrying_capacity</td>
					<td>$format_legati_attack</td>
					<td>$format_legati_defense_infantry</td>
					<td>$format_legati_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_imperatoris</td>
					<td><a class="tooltip-right" data-tooltip="$locale_imperatoris"><img class="equites-imperatoris" src="/images/x.gif" /></a></td>
					<td>$format_possible_imperatoris</td>
					<td>$imperatoris_speed</td>
					<td>$format_imperatoris_upkeep</td>
					<td>$format_imperatoris_carrying_capacity</td>
					<td>$format_imperatoris_attack</td>
					<td>$format_imperatoris_defense_infantry</td>
					<td>$format_imperatoris_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_caesaris</td>
					<td><a class="tooltip-right" data-tooltip="$locale_caesaris"><img class="equites-caesaris" src="/images/x.gif" /></a></td>
					<td>$format_possible_caesaris</td>
					<td>$caesaris_speed</td>
					<td>$format_caesaris_upkeep</td>
					<td>$format_caesaris_carrying_capacity</td>
					<td>$format_caesaris_attack</td>
					<td>$format_caesaris_defense_infantry</td>
					<td>$format_caesaris_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_battering_ram</td>
					<td><a class="tooltip-right" data-tooltip="$locale_battering_ram"><img class="battering-ram" src="/images/x.gif" /></a></td>
					<td>$format_possible_battering_ram</td>
					<td>$battering_ram_speed</td>
					<td>$format_battering_ram_upkeep</td>
					<td>$format_battering_ram_carrying_capacity</td>
					<td>$format_battering_ram_attack</td>
					<td>$format_battering_ram_defense_infantry</td>
					<td>$format_battering_ram_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_fire_catapult</td>
					<td><a class="tooltip-right" data-tooltip="$locale_fire_catapult"><img class="fire-catapult" src="/images/x.gif" /></a></td>
					<td>$format_possible_fire_catapult</td>
					<td>$fire_catapult_speed</td>
					<td>$format_fire_catapult_upkeep</td>
					<td>$format_fire_catapult_carrying_capacity</td>
					<td>$format_fire_catapult_attack</td>
					<td>$format_fire_catapult_defense_infantry</td>
					<td>$format_fire_catapult_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_senator</td>
					<td><a class="tooltip-right" data-tooltip="$locale_senator"><img class="senator" src="/images/x.gif" /></a></td>
					<td>$format_possible_senator</td>
					<td>$senator_speed</td>
					<td>$format_senator_upkeep</td>
					<td>$format_senator_carrying_capacity</td>
					<td>$format_senator_attack</td>
					<td>$format_senator_defense_infantry</td>
					<td>$format_senator_defense_cavalry</td>
				</tr>
				<tr>
					<td class="table-units">$locale_settler</td>
					<td><a class="tooltip-right" data-tooltip="$locale_settler"><img class="roman-settler" src="/images/x.gif" /></a></td>
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