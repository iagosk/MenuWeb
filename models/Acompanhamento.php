<?php
  private string NomeAcompanhamento;
  private string DiaAcompanhamento;
  
  public function __construct(string nome, string dia) {
    $this->NomeAcompanhamento = $nome;
    $this->DiaAcompanhamento = $dia;
  }
?>