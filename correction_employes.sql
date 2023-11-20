use vernom;
-- CORRECTION EXO EMPLOYES DEPARTEMENTS

-- Exprimez les requêtes suivantes en SQL.
-- Requête 1: Faire le produit cartésien en Employés et Départements
 -- SELECT *  FROM employes, departement;
 -- SELECT * FROM employes INNER JOIN departement  on employes.dno = departement.dno;
 -- SELECT * FROM employes INNER JOIN departement  USING (dno);
 
 -- Requête 2:Donnez les noms des employés et les noms de leur département
SELECT enom, dnom from employes inner join departement on employes.dno = departement.dno;

-- Requête 3: Donnez les numéros des employés travaillant à Boston
SELECT enom from employes inner join departement on employes.dno = departement.dno 
where ville like "Boston"; 

-- Requête 4: Donnez les noms des directeurs de département 1 et 3.
SELECT dir from departement where dno in (1,3);

-- Requête 5: Donnez les noms des employés travaillant dans un département 
-- avec au moins un ingénieur
select enom from employes where enom in ( 
select enom from employes, departement where employes.dno = departement.dno
	and prof like "Ingenieur"
);
-- INNER JOIN 
-- on employes.dno = departement.dno  ==> using
select enom from employes where enom in ( 
select enom from employes inner join departement using (dno)  WHERE prof like "Ingenieur"
);

-- Requête 6: Donnez le salaire et le nom des employés gagnant plus qu'un 
-- (au moins un) ingénieur

SELECT salaire, enom from employes where salaire > ( select min(salaire) from employes 
	where prof like "Ingenieur"
    );

-- Requête 7 : Donnez les salaires et le nom des employés gagnant plus que 
-- tous les ingénieurs
SELECT salaire, enom from employes where salaire < ( select max(salaire) from employes 
	where prof like "Ingenieur"
    );
-- Requête 8: Donnez les noms des employés et les noms de leur directeur.
SELECT enom, dir FROM employes inner join departement on employes.dno = departement.dno;


-- Requête 9: Trouvez les noms des employés ayant le même directeur que JIM
SELECT enom FROM employes inner join departement using (dno) where departement.dno = (
	select dno from employes where enom like "Jim" 
);

-- Requête 10: Donnez le nom et la date d'embauche des employés embauchés 
-- avant leur directeur ; donnez également le nom et la date d'embauche dudit directeur
SELECT e1.enom, e1.dateEmb from employes e1 
	inner join departement 
	on e1.dno = departement.dno
    inner join employes e2
    on e2.eno = dir
    where e1.dateEmb > e2.dateEmb
    ;