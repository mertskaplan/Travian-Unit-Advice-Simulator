<?php
	include 'header.php';
?>

<div class="form">
<form action="/gauls-advice.php" method="get">

	<input type="text" name="lang" value="<?php echo $_GET["lang"] ?>" style="display:none" />

	<div class="material">
	<h2><?php echo _('Material') ?></h2>
		<div class="material-cell">
			<a class="tooltip-right" data-tooltip="<?php echo _('Wood'); ?>"><img class="wood" alt="<?php echo _('Wood'); ?>" height="1" width="1" src="/images/x.gif" /></a><br />
			<input class="textbox textbox-material" type="text" name="wood" value="" placeholder="<?php echo _('Wood'); ?>" size="10" autofocus />
		</div>
		<div class="material-cell">
			<a class="tooltip-right" data-tooltip="<?php echo _('Clay'); ?>"><img class="clay" alt="<?php echo _('Clay'); ?>" height="1" width="1" src="/images/x.gif" /></a><br />
			<input class="textbox textbox-material" type="text" name="clay" value="" placeholder="<?php echo _('Clay'); ?>" size="10" />
		</div>
		<div class="material-cell">
			<a class="tooltip-left" data-tooltip="<?php echo _('Iron'); ?>"><img class="iron" alt="<?php echo _('Iron'); ?>" height="1" width="1" src="/images/x.gif" /></a><br />
			<input class="textbox textbox-material" type="text" name="iron" value="" placeholder="<?php echo _('Iron'); ?>" size="10" />
		</div>
		<div class="material-cell">
			<a class="tooltip-left" data-tooltip="<?php echo _('Crop'); ?>"><img class="crop" alt="<?php echo _('Crop'); ?>" height="1" width="1" src="/images/x.gif" /></a><br />
			<input class="textbox textbox-material" type="text" name="crop" value="" placeholder="<?php echo _('Crop'); ?>" size="10" />
		</div>
	</div>
	
	<div class="hero-weapon">
		<h2><?php echo _('Hero\'s weapon') ?></h2>
		<select class="textbox textbox-hero-weapon" name="hero_weapon">
			<option value="no_weapon"><?php echo _('No weapon') ?></option>
			<option value="spear_of_the_phalanx"><?php echo _('Spear of the Phalanx') ?></option>
			<option value="pike_of_the_phalanx"><?php echo _('Pike of the Phalanx') ?></option>
			<option value="lance_of_the_phalanx"><?php echo _('Lance of the Phalanx') ?></option>
			<option value="short_sword_of_the_swordsman"><?php echo _('Short sword of the Swordsman') ?></option>
			<option value="sword_of_the_swordsman"><?php echo _('Sword of the Swordsman') ?></option>
			<option value="long_sword_of_the_swordsman"><?php echo _('Long sword of the Swordsman') ?></option>
			<option value="short_bow_of_the_theutates"><?php echo _('Short-bow of the Theutates') ?></option>
			<option value="bow_of_the_theutates"><?php echo _('Bow of the Theutates') ?></option>
			<option value="long_bow_of_the_theutates"><?php echo _('Long-bow of the Theutates') ?></option>
			<option value="walking_staff_of_the_druidrider"><?php echo _('Walking-staff of the Druidrider') ?></option>
			<option value="staff_of_the_druidrider"><?php echo _('Staff of the Druidrider') ?></option>
			<option value="fighting_staff_of_the_druidrider"><?php echo _('Fighting-staff of the Druidrider') ?></option>
			<option value="light_lance_of_the_haeduan"><?php echo _('Light lance of the Haeduan') ?></option>
			<option value="lance_of_the_haeduan"><?php echo _('Lance of the Haeduan') ?></option>
			<option value="heavy_lance_of_the_haeduan"><?php echo _('Heavy lance of the Haeduan') ?></option>
		</select>
	</div>
		
	<div class="units-levels">
		<h2><?php echo _('Units levels') ?></h2>
		<div class="unit"><?php echo _('Phalanx\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="phalanx" height="1" width="1" src="/images/x.gif" alt="" /></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="phalanx_level">
				<option value="0"><?php echo _('No level') ?></option>
				<option value="1"><?php echo _('1st level') ?></option>
				<option value="2"><?php echo _('2nd level') ?></option>
				<option value="3"><?php echo _('3rd level') ?></option>
				<option value="4"><?php echo _('4th level') ?></option>
				<option value="5"><?php echo _('5th level') ?></option>
				<option value="6"><?php echo _('6th level') ?></option>
				<option value="7"><?php echo _('7th level') ?></option>
				<option value="8"><?php echo _('8th level') ?></option>
				<option value="9"><?php echo _('9th level') ?></option>
				<option value="10"><?php echo _('10th level') ?></option>
				<option value="11"><?php echo _('11th level') ?></option>
				<option value="12"><?php echo _('12th level') ?></option>
				<option value="13"><?php echo _('13th level') ?></option>
				<option value="14"><?php echo _('14th level') ?></option>
				<option value="15"><?php echo _('15th level') ?></option>
				<option value="16"><?php echo _('16th level') ?></option>
				<option value="17"><?php echo _('17th level') ?></option>
				<option value="18"><?php echo _('18th level') ?></option>
				<option value="19"><?php echo _('19th level') ?></option>
				<option value="20"><?php echo _('20th level') ?></option>
			</select>
		</div>

		<div class="unit"><?php echo _('Swordsman\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="swordsman" height="1" width="1" src="/images/x.gif" alt="" /></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="swordsman_level">
				<option value="0"><?php echo _('No level') ?></option>
				<option value="1"><?php echo _('1st level') ?></option>
				<option value="2"><?php echo _('2nd level') ?></option>
				<option value="3"><?php echo _('3rd level') ?></option>
				<option value="4"><?php echo _('4th level') ?></option>
				<option value="5"><?php echo _('5th level') ?></option>
				<option value="6"><?php echo _('6th level') ?></option>
				<option value="7"><?php echo _('7th level') ?></option>
				<option value="8"><?php echo _('8th level') ?></option>
				<option value="9"><?php echo _('9th level') ?></option>
				<option value="10"><?php echo _('10th level') ?></option>
				<option value="11"><?php echo _('11th level') ?></option>
				<option value="12"><?php echo _('12th level') ?></option>
				<option value="13"><?php echo _('13th level') ?></option>
				<option value="14"><?php echo _('14th level') ?></option>
				<option value="15"><?php echo _('15th level') ?></option>
				<option value="16"><?php echo _('16th level') ?></option>
				<option value="17"><?php echo _('17th level') ?></option>
				<option value="18"><?php echo _('18th level') ?></option>
				<option value="19"><?php echo _('19th level') ?></option>
				<option value="20"><?php echo _('20th level') ?></option>
			</select>
		</div>

		<div class="unit"><?php echo _('Pathfinder\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="pathfinder" height="1" width="1" src="/images/x.gif" alt="" /></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="pathfinder_level">
				<option value="0"><?php echo _('No level') ?></option>
				<option value="1"><?php echo _('1st level') ?></option>
				<option value="2"><?php echo _('2nd level') ?></option>
				<option value="3"><?php echo _('3rd level') ?></option>
				<option value="4"><?php echo _('4th level') ?></option>
				<option value="5"><?php echo _('5th level') ?></option>
				<option value="6"><?php echo _('6th level') ?></option>
				<option value="7"><?php echo _('7th level') ?></option>
				<option value="8"><?php echo _('8th level') ?></option>
				<option value="9"><?php echo _('9th level') ?></option>
				<option value="10"><?php echo _('10th level') ?></option>
				<option value="11"><?php echo _('11th level') ?></option>
				<option value="12"><?php echo _('12th level') ?></option>
				<option value="13"><?php echo _('13th level') ?></option>
				<option value="14"><?php echo _('14th level') ?></option>
				<option value="15"><?php echo _('15th level') ?></option>
				<option value="16"><?php echo _('16th level') ?></option>
				<option value="17"><?php echo _('17th level') ?></option>
				<option value="18"><?php echo _('18th level') ?></option>
				<option value="19"><?php echo _('19th level') ?></option>
				<option value="20"><?php echo _('20th level') ?></option>
			</select>
		</div>
		
		<div class="unit"><?php echo _('Theutates Thunder\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="theutates-thunder" height="1" width="1" src="/images/x.gif" alt="" /></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="thunder_level">
				<option value="0"><?php echo _('No level') ?></option>
				<option value="1"><?php echo _('1st level') ?></option>
				<option value="2"><?php echo _('2nd level') ?></option>
				<option value="3"><?php echo _('3rd level') ?></option>
				<option value="4"><?php echo _('4th level') ?></option>
				<option value="5"><?php echo _('5th level') ?></option>
				<option value="6"><?php echo _('6th level') ?></option>
				<option value="7"><?php echo _('7th level') ?></option>
				<option value="8"><?php echo _('8th level') ?></option>
				<option value="9"><?php echo _('9th level') ?></option>
				<option value="10"><?php echo _('10th level') ?></option>
				<option value="11"><?php echo _('11th level') ?></option>
				<option value="12"><?php echo _('12th level') ?></option>
				<option value="13"><?php echo _('13th level') ?></option>
				<option value="14"><?php echo _('14th level') ?></option>
				<option value="15"><?php echo _('15th level') ?></option>
				<option value="16"><?php echo _('16th level') ?></option>
				<option value="17"><?php echo _('17th level') ?></option>
				<option value="18"><?php echo _('18th level') ?></option>
				<option value="19"><?php echo _('19th level') ?></option>
				<option value="20"><?php echo _('20th level') ?></option>
			</select>
		</div>

		<div class="unit"><?php echo _('Druidrider\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="druidrider" height="1" width="1" src="/images/x.gif" alt="" /></div>		
		<div class="level">
			<select class="textbox textbox-units-levels" name="druidrider_level">
				<option value="0"><?php echo _('No level') ?></option>
				<option value="1"><?php echo _('1st level') ?></option>
				<option value="2"><?php echo _('2nd level') ?></option>
				<option value="3"><?php echo _('3rd level') ?></option>
				<option value="4"><?php echo _('4th level') ?></option>
				<option value="5"><?php echo _('5th level') ?></option>
				<option value="6"><?php echo _('6th level') ?></option>
				<option value="7"><?php echo _('7th level') ?></option>
				<option value="8"><?php echo _('8th level') ?></option>
				<option value="9"><?php echo _('9th level') ?></option>
				<option value="10"><?php echo _('10th level') ?></option>
				<option value="11"><?php echo _('11th level') ?></option>
				<option value="12"><?php echo _('12th level') ?></option>
				<option value="13"><?php echo _('13th level') ?></option>
				<option value="14"><?php echo _('14th level') ?></option>
				<option value="15"><?php echo _('15th level') ?></option>
				<option value="16"><?php echo _('16th level') ?></option>
				<option value="17"><?php echo _('17th level') ?></option>
				<option value="18"><?php echo _('18th level') ?></option>
				<option value="19"><?php echo _('19th level') ?></option>
				<option value="20"><?php echo _('20th level') ?></option>
			</select>
		</div>
		
		<div class="unit"><?php echo _('Haeduan\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="haeduan" height="1" width="1" src="/images/x.gif" alt="" /></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="haeduan_level">
				<option value="0"><?php echo _('No level') ?></option>
				<option value="1"><?php echo _('1st level') ?></option>
				<option value="2"><?php echo _('2nd level') ?></option>
				<option value="3"><?php echo _('3rd level') ?></option>
				<option value="4"><?php echo _('4th level') ?></option>
				<option value="5"><?php echo _('5th level') ?></option>
				<option value="6"><?php echo _('6th level') ?></option>
				<option value="7"><?php echo _('7th level') ?></option>
				<option value="8"><?php echo _('8th level') ?></option>
				<option value="9"><?php echo _('9th level') ?></option>
				<option value="10"><?php echo _('10th level') ?></option>
				<option value="11"><?php echo _('11th level') ?></option>
				<option value="12"><?php echo _('12th level') ?></option>
				<option value="13"><?php echo _('13th level') ?></option>
				<option value="14"><?php echo _('14th level') ?></option>
				<option value="15"><?php echo _('15th level') ?></option>
				<option value="16"><?php echo _('16th level') ?></option>
				<option value="17"><?php echo _('17th level') ?></option>
				<option value="18"><?php echo _('18th level') ?></option>
				<option value="19"><?php echo _('19th level') ?></option>
				<option value="20"><?php echo _('20th level') ?></option>
			</select>
		</div>
		
		<div class="unit"><?php echo _('Ram\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="gaul-ram" height="1" width="1" src="/images/x.gif" alt="" /></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="ram_level">
				<option value="0"><?php echo _('No level') ?></option>
				<option value="1"><?php echo _('1st level') ?></option>
				<option value="2"><?php echo _('2nd level') ?></option>
				<option value="3"><?php echo _('3rd level') ?></option>
				<option value="4"><?php echo _('4th level') ?></option>
				<option value="5"><?php echo _('5th level') ?></option>
				<option value="6"><?php echo _('6th level') ?></option>
				<option value="7"><?php echo _('7th level') ?></option>
				<option value="8"><?php echo _('8th level') ?></option>
				<option value="9"><?php echo _('9th level') ?></option>
				<option value="10"><?php echo _('10th level') ?></option>
				<option value="11"><?php echo _('11th level') ?></option>
				<option value="12"><?php echo _('12th level') ?></option>
				<option value="13"><?php echo _('13th level') ?></option>
				<option value="14"><?php echo _('14th level') ?></option>
				<option value="15"><?php echo _('15th level') ?></option>
				<option value="16"><?php echo _('16th level') ?></option>
				<option value="17"><?php echo _('17th level') ?></option>
				<option value="18"><?php echo _('18th level') ?></option>
				<option value="19"><?php echo _('19th level') ?></option>
				<option value="20"><?php echo _('20th level') ?></option>
			</select>
		</div>
		
		<div class="unit"><?php echo _('Trebuchet\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="trebuchet" height="1" width="1" src="/images/x.gif" alt="" /></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="trebuchet_level">
				<option value="0"><?php echo _('No level') ?></option>
				<option value="1"><?php echo _('1st level') ?></option>
				<option value="2"><?php echo _('2nd level') ?></option>
				<option value="3"><?php echo _('3rd level') ?></option>
				<option value="4"><?php echo _('4th level') ?></option>
				<option value="5"><?php echo _('5th level') ?></option>
				<option value="6"><?php echo _('6th level') ?></option>
				<option value="7"><?php echo _('7th level') ?></option>
				<option value="8"><?php echo _('8th level') ?></option>
				<option value="9"><?php echo _('9th level') ?></option>
				<option value="10"><?php echo _('10th level') ?></option>
				<option value="11"><?php echo _('11th level') ?></option>
				<option value="12"><?php echo _('12th level') ?></option>
				<option value="13"><?php echo _('13th level') ?></option>
				<option value="14"><?php echo _('14th level') ?></option>
				<option value="15"><?php echo _('15th level') ?></option>
				<option value="16"><?php echo _('16th level') ?></option>
				<option value="17"><?php echo _('17th level') ?></option>
				<option value="18"><?php echo _('18th level') ?></option>
				<option value="19"><?php echo _('19th level') ?></option>
				<option value="20"><?php echo _('20th level') ?></option>
			</select>
		</div>
		
		<div class="unit"><?php echo _('Chieftain\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="chieftain" height="1" width="1" src="/images/x.gif" alt="" /></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="chieftain_level">
				<option value="0"><?php echo _('No level') ?></option>
				<option value="1"><?php echo _('1st level') ?></option>
				<option value="2"><?php echo _('2nd level') ?></option>
				<option value="3"><?php echo _('3rd level') ?></option>
				<option value="4"><?php echo _('4th level') ?></option>
				<option value="5"><?php echo _('5th level') ?></option>
				<option value="6"><?php echo _('6th level') ?></option>
				<option value="7"><?php echo _('7th level') ?></option>
				<option value="8"><?php echo _('8th level') ?></option>
				<option value="9"><?php echo _('9th level') ?></option>
				<option value="10"><?php echo _('10th level') ?></option>
				<option value="11"><?php echo _('11th level') ?></option>
				<option value="12"><?php echo _('12th level') ?></option>
				<option value="13"><?php echo _('13th level') ?></option>
				<option value="14"><?php echo _('14th level') ?></option>
				<option value="15"><?php echo _('15th level') ?></option>
				<option value="16"><?php echo _('16th level') ?></option>
				<option value="17"><?php echo _('17th level') ?></option>
				<option value="18"><?php echo _('18th level') ?></option>
				<option value="19"><?php echo _('19th level') ?></option>
				<option value="20"><?php echo _('20th level') ?></option>
			</select>
		</div>

		<div class="unit"><?php echo _('Settler\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="gaul-settler" height="1" width="1" src="/images/x.gif" alt="" /></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="settler_level">
				<option value="0"><?php echo _('No level') ?></option>
				<option value="1"><?php echo _('1st level') ?></option>
				<option value="2"><?php echo _('2nd level') ?></option>
				<option value="3"><?php echo _('3rd level') ?></option>
				<option value="4"><?php echo _('4th level') ?></option>
				<option value="5"><?php echo _('5th level') ?></option>
				<option value="6"><?php echo _('6th level') ?></option>
				<option value="7"><?php echo _('7th level') ?></option>
				<option value="8"><?php echo _('8th level') ?></option>
				<option value="9"><?php echo _('9th level') ?></option>
				<option value="10"><?php echo _('10th level') ?></option>
				<option value="11"><?php echo _('11th level') ?></option>
				<option value="12"><?php echo _('12th level') ?></option>
				<option value="13"><?php echo _('13th level') ?></option>
				<option value="14"><?php echo _('14th level') ?></option>
				<option value="15"><?php echo _('15th level') ?></option>
				<option value="16"><?php echo _('16th level') ?></option>
				<option value="17"><?php echo _('17th level') ?></option>
				<option value="18"><?php echo _('18th level') ?></option>
				<option value="19"><?php echo _('19th level') ?></option>
				<option value="20"><?php echo _('20th level') ?></option>
			</select>
		</div>
	</div>
	
	<div class="submit">
		<input class="button" type="submit" value="<?php echo _('Give me an advice') ?>"/>
	</div>
</form>
</div>

<?php
	include 'footer.php';
?>