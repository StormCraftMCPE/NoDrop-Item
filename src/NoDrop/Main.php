<?php

namespace NoDrop;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\event\player\PlayerDropItemEvent;
use pocketmine\utils\TextFormat as C;

class Main extends PluginBase implements Listener{
  
  public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->info(C::GREEN."NoDrop Enable!");
  }
  
  public function onDisable(){
    $this->getLogger()->info(C::RED."NoDrop Disable!");}
  
  public function onDropItem(PlayerDropItemEvent $event){
   if($event->getPlayer()->getGamemode() === 1) $event->setCancelled();
  }
  
