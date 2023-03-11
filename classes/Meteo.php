<?php

class Meteo {
    private string $date;
    private string $ville;
    private string $periode;
    private string $resumeTemps;
    private int $identifiantResume;
    private int $temperatureMin;
    private int $temperatureMax;
    private string $commentaire;

    public function __construct(string $date, string $ville, string $periode,$resumeTemps, int $identifiantResume, int $temperatureMin, int $temperatureMax, string $commentaire) {
        $this->date = $date;
        $this->ville = $ville;
        $this->periode = $periode;
        $this->resumeTemps = $resumeTemps;
        $this->identifiantResume = $identifiantResume;
        $this->temperatureMin = $temperatureMin;
        $this->temperatureMax = $temperatureMax;
        $this->commentaire = $commentaire;
    }
    
    //Getters
    public function getDate():string {
        return $this->date;
    }
    public function getVille():string {
        return $this->ville;
    }
    public function getPeriode():string {
        return $this->periode;
    }

    public function getResumeTemps() {
        return $this->resumeTemps;
    }

    public function getIdentifiantResume():int {
        return $this->identifiantResume;
    }
    public function getTemperatureMin():int {
        return $this->temperatureMin;
    }
    public function getTemperatureMax():int {
        return $this->temperatureMax;
    }

    public function getCommentaire():string {
        return $this->commentaire;
    }

    //Setters
    public function setDate(string $date):void {
        $this->date = $date;
    }
    public function setVille(string $ville):void {
        $this->ville = $ville;
    }
    public function setPeriode(string $periode):void {
        $this->periode = $periode;
    }

    public function setIdentifiantResume(int $identifiantResume):void {
        $this->identifiantResume = $identifiantResume;
    }
    public function setTemperatureMin(int $temperatureMin):void {
        $this->temperatureMin = $temperatureMin;
    }
    public function setTemperatureMax(int $temperatureMax):void {
        $this->temperatureMax = $temperatureMax;
    }

    public function setCommentaire(string $commentaire):void {
        $this->commentaire = $commentaire;
    }

    public function setResumeTemps($resumeTemps) {
        $this->resumeTemps = $resumeTemps;
    }
}

?>