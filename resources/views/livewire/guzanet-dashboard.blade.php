{{-- Ubicación: resources/views/livewire/guzanet-dashboard.blade.php --}}
<div x-data="{
    userMenuOpen: @entangle('userMenuOpen'),
    themeMenuOpen: @entangle('themeMenuOpen'),
    currentTheme: @entangle('currentTheme'),
    themes: @entangle('themes')
}">
  <div class="container mx-auto px-4 py-6">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
      <h1 class="text-2xl font-bold mb-4">Hola, me llamo Ramuel González</h1>
      <p class="mb-4">
        Claro que ese es mi nick o seudónimo. Les contaré un poco de mí:
      </p>
      <ul class="space-y-2">
        <li>Programador, analista de sistemas, ingeniería en informática que no terminé.</li>
        <li>Soy chileno con algunos años en París.</li>
        <li>Hago sistemas web para entretenerme y mantener mi mente ocupada en lo que me gusta.</li>
      </ul>

      <h2 class="text-xl font-semibold mt-6 mb-4">Algunos de los sistemas que he creado son:</h2>
      <ul class="space-y-2">
        <li>Ingeniería interna conversiva de sistemas sociales en decadencia.</li>
        <li>Ordenar y alinear los rabo de nubes para que sean más productivos.</li>
        <li>Asegurar los tiempos para que Principito llegue a la hora especificada.</li>
        <li>Analizar el desempeño de la vida para que sea productiva tanto en vida como en esperanza de vida, algo
          complicado últimamente.</li>
      </ul>

      <div class="mt-6">
        <p>Si requieres de un masaje de esperanza y fortaleza puedes escribirme a ramuelcl, puedes elegir lo que quieras
          después de @</p>
      </div>
    </div>
  </div>
</div>
