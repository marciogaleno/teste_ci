<?php

namespace Application\Fiscalizacao;

class ValidaPlaca
{
	public $finais_placa_nao_pode_circular_semana = [
		'SEGUNDA' => ['1', '2'],
		'TERCA'   => ['3', '4'],
		'QUARTA'  => ['5', '6'],
		'QUINTA'  => ['7', '8'],
		'SEXTA'   => ['9', '0']
	];

	/** teste
	* Verifica se uma determinada placa pode circular em determinado dia
    * @param String $placa numero da placa do veículo
    * @param String $dia_semana dia da semana
    * @return bool False se a placa não pode circular no dia passado como parâmetro
	*/
	public function podeCircularNoRodizio(String $placa, Array $dias_semana) : bool
	{
		$caracter_final_placa = substr($placa, -1);

		foreach ($dias_semana as $dia_semana) {
			$dia_semana = strtoupper($dia_semana);

			if (in_array($caracter_final_placa, $this->finais_placa_nao_pode_circular_semana[$dia_semana])) {
				return false;
			}
		}
	

		return true;
	}	
}
