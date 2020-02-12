USE portfolio;

-- Fiche.accueil
-- {
        SELECT count(*) AS nbFiches 
        FROM situation ;

        SELECT s.LibelleSituation as TitreFiche, t.LibelleTypeFiche as TypeFiche, s.Disponible, 
            count(NumAsso) as nbCompetence, so.LibelleSituation, nomLien
        FROM situation s, typefiche t, competencesituation c, situationobligatoire so 
        WHERE s.TypeFiche = t.IdTypeFiche
        AND s.SituationObligatoire = so.IdSituation
        AND c.NumSituation = s.NumSituation
        AND s.NumSituation = '$i';
-- }

