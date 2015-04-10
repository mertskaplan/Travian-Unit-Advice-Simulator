<?php
	include 'header.php';
?>

<div class="form">
<form action="/teutons-advice.php" method="get">

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
			<option value="club_of_the_clubswinger"><?php echo _('Club of the Clubswinger') ?></option>
			<option value="mace_of_the_clubswinger"><?php echo _('Mace of the Clubswinger') ?></option>
			<option value="morning_star_of_the_clubswinger"><?php echo _('Morning star of the Clubswinger') ?></option>
			<option value="spear_of_the_spearman"><?php echo _('Spear of the Spearman') ?></option>
			<option value="spike_of_the_spearman"><?php echo _('Spike of the Spearman') ?></option>
			<option value="lance_of_the_spearman"><?php echo _('Lance of the Spearman') ?></option>
			<option value="hatchet_of_the_axeman"><?php echo _('Hatchet of the Axeman') ?></option>
			<option value="axe_of_the_axeman"><?php echo _('Axe of the Axeman') ?></option>
			<option value="battle_axe_of_the_axeman"><?php echo _('Battle axe of the Axeman') ?></option>
			<option value="light_hammer_of_the_paladin"><?php echo _('Light hammer of the Paladin') ?></option>
			<option value="hammer_of_the_paladin"><?php echo _('Hammer of the Paladin') ?></option>
			<option value="heavy_hammer_of_the_paladin"><?php echo _('Heavy hammer of the Paladin') ?></option>
			<option value="short_sword_of_the_teutonic_knight"><?php echo _('Short sword of the Teutonic Knight') ?></option>
			<option value="sword_of_the_teutonic_knight"><?php echo _('Sword of the Teutonic Knight') ?></option>
			<option value="long_sword_of_the_teutonic_knight"><?php echo _('Long sword of the Teutonic Knight') ?></option>
		</select>
	</div>
		
	<div class="units-levels">
		<h2><?php echo _('Units levels') ?></h2>
		<div class="unit"><?php echo _('Clubswinger\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="clubswinger" height="1" width="1" src="/images/x.gif"></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="clubswinger_level">
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

		<div class="unit"><?php echo _('Spearman\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="spearman" height="1" width="1" src="/images/x.gif"></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="spearman_level">
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

		<div class="unit"><?php echo _('Axeman\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="axeman" height="1" width="1" src="/images/x.gif"></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="axeman_level">
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
		
		<div class="unit"><?php echo _('Scout\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="scout" height="1" width="1" src="/images/x.gif"></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="scout_level">
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

		<div class="unit"><?php echo _('Paladin\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="paladin" height="1" width="1" src="/images/x.gif"></div>		
		<div class="level">
			<select class="textbox textbox-units-levels" name="paladin_level">
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
		
		<div class="unit"><?php echo _('Teutonic Knight\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="teutonic-knight" height="1" width="1" src="/images/x.gif"></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="teutonic_knight_level">
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
		<div class="unit-icon"><img class="teutonic-ram" height="1" width="1" src="/images/x.gif"></div>
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
		
		<div class="unit"><?php echo _('Catapult\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="catapult" height="1" width="1" src="/images/x.gif"></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="catapult_level">
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
		
		<div class="unit"><?php echo _('Chief\'s level') . ': '; ?></div>
		<div class="unit-icon"><img class="chief" height="1" width="1" src="/images/x.gif"></div>
		<div class="level">
			<select class="textbox textbox-units-levels" name="chief_level">
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
		<div class="unit-icon"><img class="teutonic-settler" height="1" width="1" src="/images/x.gif"></div>
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