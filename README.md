## Instrucciones

Tenemos un código, que tienen una estructura creada. El código tiene elementos sin terminar, descritos más abajo, y algún error que hará que no funcionen (como lo puede ser por ejemplo, algún paquete sin importar, algún typo...).

El propósito final es tener una visualización de una serie de usuarios (personajes) que tienen una misión que cumplir.


Tenemos una tabla usuarios creada, en la que los usuarios tienen nombre, email y contraseña.
Por otra parte, tenemos una migración preparada para que los usuarios tengan una misión.
- Terminar la migración para la tabla missions haciendo que la tabla missions se relacione con users con una foreign key.
- Hacer que title por defecto sea 'Mission title'.
- Hacer que aparezca el campo created_at y updated_at y que se actualicen cad vez que hay un cambio en la base de datos.
- Añadir soft deletes


Hay creado un modelo Mission:
- Completar la función scopeNotTitles para que no devuelva las misiones que tienen por defecto 'Mission title'.
- Completar la relación users.
- Modificar el modelo para que cuando se llame al get de desciption ($mission->description), si la description es nula, devuelva "---" en su lugar.

Hay una factory creada:
- Terminar la relación user_id
- Pregunta, ¿Qué hace optional($weight = 0.4)?

Completar el test unitario MissionTest para que:
a_mission_has_a_user => Asegure que la relación "$mission->user()" funcione
a_mission_works_with_title_scope => Asegure que el scope "$mission->user()" funcione bien

En web.php, le pasamos a la vista welcome los datos de todos los usuarios con misiones. En el front se verá un botón 'siguiente', que cada vez que se pulsa hace que se avance el usuario que se está visualizando.
- Hacer que el componente Root de Vue, reciba a todos los usuarios y pinte un componente full-frame para cada uno de ellos, en los que se muestre su nombre y su email.
- Mueve los estilos inline de los componentes de Vue a Sass (app.scss)
- Agrega las clases de bootstrap necesarias (o estilos propios si lo prefieres), para que tanto el texto del componente como el botón aparezcan centrados en la pantalla, vertical y horizontalmente


Para terminar, sube tu código a una rama de github "test/nombre decandidato" y realiza un pull request a master.

Avisa una vez hayas completado el test.
