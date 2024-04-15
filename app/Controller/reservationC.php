<?php

include('../Model/reservation.php');
class reservationC{
    public function show($reservationx) {
        $data = array(
            'ido' => $reservationx->getIdo(),
            'cid' => $reservationx->getCid(),
            'date debut' => $reservationx->getdated(),
            'date fin' => $reservationx->getdatef()
        );

        
        $html = '<table border="1">';
        $html .= '<tr>';
        foreach ($data as $attribute => $value) {
            $html .= '<th>' . htmlspecialchars($attribute) . '</th>';
        }
        $html .= '</tr>';
        $html .= '<tr>';
        foreach ($data as $value) {
            $html .= '<td>' . htmlspecialchars($value) . '</td>';
        }
        $html .= '</tr>';
        $html .= '</table>';
        
        print_r($html);
    }
}

?>