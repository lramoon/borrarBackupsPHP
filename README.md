# borrarBackupsPHP ð
Esto es un script sencillo para borrar backups de bases de datos con archivos .sql (Puede cambiar el formato a su gusto). Solo borra backups que tenga mas de 3 dÃ­as  de antiguedad.

- En la variable $buscar_carpeta = debe colocar la ruta(path) de la carpeta donde se realizal los backups. ð

- En la variable $gestion_dia = debes colocar la condicion de cuantos dias de antiguedad quiere que guarde los backups. â

- En la carpeta donde se encuentran los backups debe crear un archivo .txt que se llame 'controlDeBorrado.txt', en ese archivo se va a escribir el historico de operaciones de las bases de datos que han sido eliminadas con su hora de realizado. ð

## ð Para complementar esto, si se encuentra en linux puedes automatizar la tarea mediante el crontab. 

## nota: Este script es solo para uso practico e informativo, No me hago responsable del uso que le den. ð
