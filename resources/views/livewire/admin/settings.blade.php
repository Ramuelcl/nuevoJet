<div>
  <h2>Admin Settings</h2>

  @if (session()->has('message'))
    <div>{{ session('message') }}</div>
  @endif
  @dump($settings)
  <form wire:submit.prevent="save">
    <div>
      <label for="site_name">Site Name:</label>
      <input type="text" id="site_name" wire:model="settings.site_name">
    </div>

    <div>
      <label for="site_email">Site Email:</label>
      <input type="email" id="site_email" wire:model="settings.site_email">
    </div>

    <div>
      <label for="site_description">Site Description:</label>
      <textarea id="site_description" wire:model="settings.site_description"></textarea>
    </div>

    <!-- Agrega más campos según sea necesario -->

    <button type="submit">Save Settings</button>
  </form>
</div>
