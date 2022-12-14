<div class="card card-primary card-outline">
    <div class="card-header">
        <h5 class="card-title m-0">Makanan</h5>
    </div>
    <div class="card-body">

        <ul class="users-list clearfix" style="margin-bottom:0px">
            <?php foreach($food_item as $food): ?>
            <li class="food" style="width:120px;cursor:pointer;padding:0px" data-type="food"
                data-id="<?=$food->id?>" data-hp="<?=$food->inc_hp?>" data-mp="<?=$food->inc_mana?>"
                data-harga="<?=$food->harga?>" data-nama="<?=$food->nama_food?>" data-toggle="tooltip"
                title="<?="HP = +".$food->inc_hp." | "."MP = +".$food->inc_mana?>">
                <img src="<?=base_url('assets/dist/img/user1-128x128.jpg')?>" width="70" height="70"
                    alt="User Image">
                <span class="users-list-name text-xs"><?=$food->nama_food?></span>
                <span class="users-list-date"><?=$food->harga?></span>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

<div class="card card-primary card-outline">
    <div class="card-header">
        <h5 class="card-title m-0">Perlengkapan</h5>
    </div>
    <div class="card-body">

        <ul class="users-list clearfix data_item" style="margin-bottom:0px">
        <?php foreach($item_item as $skill): ?>
            <li class="skill" style="width:120px;cursor:pointer;padding:0px" data-type="skill"
                data-level="<?=$skill->level?>" data-nama="<?=$skill->nama_item?>"
                data-harga="<?=$skill->harga?>" data-id="<?=$skill->id?>" data-hp="<?=$skill->inc_hp?>"
                data-mp="<?=$skill->inc_mana?>" data-def="<?=$skill->inc_def?>" data-str="<?=$skill->inc_str?>" data-toggle="tooltip"
                title="<?="HP = +".$skill->inc_hp." | "."MP = +".$skill->inc_mp." | "."STR = +".$skill->inc_str." | "."DEF = +".$skill->inc_def?>.">
                <img src="<?=base_url('assets/dist/img/user1-128x128.jpg')?>" width="70" height="70"
                    alt="User Image">
                <span class="users-list-name text-xs"><?=$skill->nama_item?></span>
                <?php if(!empty($skill->level)):?>
                <span class="users-list-date"><?=$skill->harga*2**($skill->level-1)?></span>
                <?php else: ?>
                <span class="users-list-date"><?=$skill->harga?></span>
                <?php endif; ?>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>

<div class="card card-primary card-outline">
    <div class="card-header">
        <h5 class="card-title m-0">Skill</h5>
    </div>
    <div class="card-body">

        <ul class="users-list clearfix" style="margin-bottom:0px">
            <?php foreach($skill_item as $skill): ?>
            <li class="skill" style="width:120px;cursor:pointer;padding:0px" data-type="skill"
                data-level="<?=$skill->level?>" data-nama="<?=$skill->nama_skill?>"
                data-harga="<?=$skill->harga?>" data-id="<?=$skill->id?>" data-dmg="<?=$skill->dmg?>"
                data-cd="<?=$skill->cooldown?>" data-mp_use="<?=$skill->mana_usage?>" data-toggle="tooltip"
                title="<?="STR = +".$skill->dmg." | "."CD = ".$skill->cooldown." Sec | "."MP USAGE= +".$skill->mana_usage?>">
                <img src="<?=base_url('assets/dist/img/user1-128x128.jpg')?>" width="70" height="70"
                    alt="User Image">
                <span class="users-list-name text-xs"><?=$skill->nama_skill?></span>
                <?php if(!empty($skill->level)):?>
                <span class="users-list-date"><?=$skill->harga*2**($skill->level-1)?></span>
                <?php else: ?>
                <span class="users-list-date"><?=$skill->harga?></span>
                <?php endif; ?>
            </li>
            <?php endforeach ?>
        </ul>
    </div>
</div>
