<?php

namespace isrdxv\practice\game;

use isrdxv\practice\game\Game;
use isrdxv\practice\arena\{
  Arena,
  ArenaManager
};

class GameManager
{
  /** @var Game[] **/
  private array $games = [];
  
  public function loadGames(): void
  {
    foreach(ArenaManager::getInstance()->getArenas() as $arena) {
      $this->createGame($arena);
    }
  }
  
  public function createGame(?Arena $arena): void
  {
    $this->games[$arena->getName()] = new Game($arena);
  }
  
  public function deleteGame(string $name): void
  {
    if (!empty($game = $this->games[$name])) {
      unset($game);
    }
  }
  
  public function getGameByName(string $name): ?Game
  {
    if ($name === "" or $name === null) return null;
    if (empty($this->games[$name])) return null;
    return $this->games[$name];
  }
  
  public function getGames(): array
  {
    return $this->games;
  }
  
}