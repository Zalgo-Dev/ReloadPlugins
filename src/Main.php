<?php

declare(strict_types=1);

namespace ZalgoDev\ReloadPlugins;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;
use pocketmine\utils\TextFormat;

class Main extends PluginBase{
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        if ($command->getName() === "reload") {
            if (isset($args[0])) {
                $pluginName = $args[0];
                $plugin = $this->getServer()->getPluginManager()->getPlugin($pluginName);
                if ($plugin) {
                    $sender->sendMessage(TextFormat::DARK_PURPLE . "[ReloadPlugings] " . TextFormat::GREEN . "Reloading " . $plugin->getName());
                    $this->getServer()->getPluginManager()->disablePlugin($plugin);
                    $this->getServer()->getPluginManager()->enablePlugin($plugin);
                    $sender->sendMessage(TextFormat::DARK_PURPLE . "[ReloadPlugings] " . TextFormat::GREEN . "Reloading finished.");
                    return true;
                } else {
                    $sender->sendMessage(TextFormat::DARK_PURPLE . "[ReloadPlugings] " . TextFormat::RED . "Plugin not found");
                    return false;
                }
                return true;
            } else {
                $pluginManager = $this->getServer()->getPluginManager();
                $sender->sendMessage(TextFormat::DARK_PURPLE . "[ReloadPlugings] " . "§eDeactivate all plugins...");

                // Désactiver tous les plugins
                foreach ($pluginManager->getPlugins() as $plugin) {
                    if ($plugin->isEnabled()) {
                        $pluginManager->disablePlugin($plugin);
                    }
                }

                $sender->sendMessage(TextFormat::DARK_PURPLE . "[ReloadPlugings] " . "§aAll plugins have been deactivated !");
                $sender->sendMessage(TextFormat::DARK_PURPLE . "[ReloadPlugings] " . "§eReactivate all plugins...");

                // Réactiver tous les plugins
                foreach ($pluginManager->getPlugins() as $plugin) {
                    if (!$plugin->isEnabled()) {
                        $pluginManager->enablePlugin($plugin);
                    }
                }

                $sender->sendMessage(TextFormat::DARK_PURPLE . "[ReloadPlugings] " . "§aAll plugins have been reactivated !");
                $sender->sendMessage(TextFormat::DARK_PURPLE . "[ReloadPlugings] " . "Reload finish.");
                return true;
            }
        }
        return false;
    }
}
