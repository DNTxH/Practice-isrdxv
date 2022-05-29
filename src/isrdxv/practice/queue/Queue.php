<?php

namespace isrdxv\practice\queue;

class Queue
{
  private string $id;
  
  private Arena $arena;
  
  private array $players;
  
  private array $spectators;
  
  public function __construct(string $id, Arena $arena)
  {
    $this->id = $id;
    $this->arena = $arena;
  }
  
  public function getId(): string
  {
    return $this->id;
  }

  public function getArena(): Arena
  {
    return $this->arena;
  }
  
}