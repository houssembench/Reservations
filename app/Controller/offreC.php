<?php

include('../Model/offre.php');
class offreC{
    public function show($offrex) {
        $data = array(
            'titre' => $offrex->gettitre(),
            'description' => $offrex->getdes(),
            'date debut' => $offrex->getdated(),
            'date fin' => $offrex->getdatef(),
            'categorie' => $offrex->getcategorie(),
            'prix' => $offrex->getprix()
        );

        // HTML for displaying the table
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