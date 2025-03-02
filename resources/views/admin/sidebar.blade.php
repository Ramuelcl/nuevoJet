<!-- resources/views/admin/sidebar.blade.php -->
<aside id="logo-sidebar"
       class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
       aria-label="Sidebar">
  <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
    <ul class="space-y-2 font-medium">

      <li>
        <button @click="selected = 'settings'"
                class="flex items-center p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
          <x-forms.tw_icons name="adjustments" class="w-5 h-5 mr-2" />
          <span>{{ __('Configuration') }}</span>
        </button>
      </li>
      <li>
        <button @click="selected = 'profile'"
                class="flex items-center p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
          <x-forms.tw_icons name="user" class="w-5 h-5 mr-2" />
          <span>{{ __('Profile') }}</span>
        </button>
      </li>
      <li>
        <x-dropdown align="right" width="48">
          <x-slot name="trigger">
            <button class="flex items-center p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700">
              <x-forms.tw_icons name="users" class="w-5 h-5 mr-2" />
              <span>{{ __('Users') }}</span>
              <x-forms.tw_icons name="chevron-down" class="w-4 h-4 ml-auto" />
            </button>
          </x-slot>

          <x-slot name="content">
            <div class="w-48">
              <ul class="space-y-2">
                <li>
                  <button @click="selected = 'users-list'"
                          class="flex items-center p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700 w-full text-left">
                    <x-forms.tw_icons name="table" class="w-4 h-4 mr-2" />
                    <span>{{ __('List') }}</span>
                  </button>
                </li>
                <li>
                  <button @click="selected = 'users-permissions'"
                          class="flex items-center p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700 w-full text-left">
                    <x-forms.tw_icons name="key" class="w-4 h-4 mr-2" />
                    <span>{{ __('Permissions') }}</span>
                  </button>
                </li>
                <li>
                  <button @click="selected = 'users-roles'"
                          class="flex items-center p-2 rounded hover:bg-gray-200 dark:hover:bg-gray-700 w-full text-left">
                    <x-forms.tw_icons name="tag" class="w-4 h-4 mr-2" />
                    <span>{{ __('Roles') }}</span>
                  </button>
                </li>
              </ul>
            </div>
          </x-slot>
        </x-dropdown>
      </li>
    </ul>
  </div>
</aside>

<div class="p-4 sm:ml-64">
  <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
    <!-- Contenido Principal -->
    <div class="flex-1 flex flex-col p-6 overflow-x-hidden">
      <div x-show="selected === 'settings'">
        settings
        @include('admin.settings')
      </div>
      <div x-show="selected === 'profile'">
        @include('admin.profile')
      </div>
      <div x-show="selected === 'users-list'">
        {{-- @include('admin.users-list') --}}
      </div>
      <div x-show="selected === 'users-permissions'">
        {{-- @include('admin.users-permissions') --}}
      </div>
      <div x-show="selected === 'users-roles'">
        {{-- @include('admin.users-roles') --}}
      </div>
    </div>
  </div>

</div>
