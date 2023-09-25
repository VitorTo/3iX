<?php

namespace app\components;

use yii\base\Component;
use DateTime;

class Uteis extends Component
{
 
    public function obterDiasUteis($ano, $mes) {
        $diasUteis = array();
        $totalDias = cal_days_in_month(CAL_GREGORIAN, $mes, $ano);

        // Define o locale para exibir os nomes dos dias da semana corretamente
        setlocale(LC_TIME, 'pt_BR');
    
        for ($dia = 1; $dia <= $totalDias; $dia++) {
            $data = new DateTime("$ano-$mes-$dia");
            
            $diaSemana = $data->format('N');
    
            if ($diaSemana >= 1 && $diaSemana <= 5) {
                $nomeDia = $data->format('l');
                $nomeDia = $this->translateDayBR($nomeDia);
                $diasUteis[$data->format('d')] = $nomeDia;
            }
        }

        
    
        return $diasUteis;
    }

    private function translateDayBR($day)
    {
        $dias = array(
            'monday'=>'segunda',
            'tuesday' => 'terça',
            'wednesday' => 'quarta',
            'thursday' => 'quinta',
            'friday' => 'sexta',
        );

        $day = mb_strtolower($day, 'UTF-8');
        $dayTranslate = strtr($day, $dias);

        return strtolower($dayTranslate);
    } 

}