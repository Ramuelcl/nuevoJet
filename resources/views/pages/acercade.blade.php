<!-- resources/views/pages/acercade.blade.php -->

<x-app-layout>
  <x-slot name="header">
    <div class="max-w-7xl mx-auto py-2 px-4 sm:px-6 lg:px-8">
      Acerca de Nosotros
    </div>
  </x-slot>

  <div class="font-noto text-wrap max-w-5xl mx-auto">
    <br><br>Hola, me llamo Ramuel González, claro que ese es mi nick o seudonimo. Les contaré un poco de mi:<br><br>
    programador, analista de sistemas, ingeniería en informática que no terminé. Soy chileno con algunos años en Paris.
    Hago sistemas web para entretenerme y mantener mi mente ocupada en lo que me gusta.
    Algunos de los sistemas que he creado son: <br><br>
    ingeniería interna conversiva de sistemas sociales en decadencia.<br><br>
    ordenar y alinear los rabo de nubes para que sean más productivos.<br><br>
    asegurar los tiempos para que Principito llegue a la hora especificada.<br><br>
    analizar el desempeño de la vida para que sea productiva tanto en vida como en esperanza de vida, algo complicado
    últimamente.<br><br>
    si requieres de un masaje de esperanza y fortaleza puedes escribirme a ramuelcl, puedes elejir lo que quieras
    después de @<br><br>
  </div>

  <x-slot name="footer">
    <p>&copy; {{ date('Y') }} Guzanet. Ramuel González</p>
  </x-slot>
</x-app-layout>
