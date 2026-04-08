<x-layout>
    <form method="POST" action="/register/update/{{ $user->id }}">
        @csrf
        @method("PATCH")
        
<div class="max-w-4xl mx-auto sm:px-6 lg:px-8 mt-10">
        <div class="border-b border-white-900/10 pb-12">
      <h2 class="text-base/7 font-semibold text-black-900">Edit User Information</h2>
      <p class="mt-1 text-sm/6 text-white-600">Use a permanent address where you can receive mail.</p>

      <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-3">
          <label for="first-name" class="block text-sm/6 font-medium text-black-900">First name</label>
          <div class="mt-2">
            <input id="first_name" type="text" name="first_name" value="{{ $user->first_name }}" autocomplete="given-name" class="block w-full rounded-md bg-black px-3 py-1.5 text-base text-black-900 outline-1 -outline-offset-1 outline-white-300 placeholder:text-black-900 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="last-name" class="block text-sm/6 font-medium text-black-900">Last name</label>
          <div class="mt-2">
            <input id="last_name" type="text" name="last_name" value="{{ $user->last_name }}" autocomplete="family-name" class="block w-full rounded-md bg-black px-3 py-1.5 text-base text-black-900 outline-1 -outline-offset-1 outline-white-300 placeholder:text-black-900 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>
        <div class="sm:col-span-3">
          <label for="middle-name" class="block text-sm/6 font-medium text-black-900">Middle name</label>
          <div class="mt-2">
            <input id="middle_name" type="text" name="middle_name" value="{{ $user->middle_name }}" autocomplete="middle-name" class="block w-full rounded-md bg-black px-3 py-1.5 text-base text-black-900 outline-1 -outline-offset-1 outline-white-300 placeholder:text-black-900 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="sm:col-span-3">
          <label for="nickname" class="block text-sm/6 font-medium text-black-900">Nickname</label>
          <div class="mt-2">
            <input id="nickname" type="text" name="nickname" value="{{ $user->nickname }}" autocomplete="nickname" class="block w-full rounded-md bg-black px-3 py-1.5 text-base text-black-900 outline-1 -outline-offset-1 outline-white-300 placeholder:text-black-900 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="email" class="block text-sm/6 font-medium text-black-900">Email address</label>
          <div class="mt-2">
            <input id="email" type="email" name="email" value="{{ $user->email }}" autocomplete="email" class="block w-full rounded-md bg-black px-3 py-1.5 text-base text-black-900 outline-1 -outline-offset-1 outline-white-300 placeholder:text-black-900 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="age" class="block text-sm/6 font-medium text-black-900">Age</label>
          <div class="mt-2">
            <input id="age" type="number" name="age" value="{{ $user->age }}" autocomplete="age" class="block w-full rounded-md bg-black px-3 py-1.5 text-base text-black-900 outline-1 -outline-offset-1 outline-white-300 placeholder:text-black-900 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="col-span-full">
          <label for="address" class="block text-sm/6 font-medium text-black-900">Street address</label>
          <div class="mt-2">
            <input id="address" type="text" name="address" value="{{ $user->address }}" autocomplete="address" class="block w-full rounded-md bg-black px-3 py-1.5 text-base text-black-900 outline-1 -outline-offset-1 outline-white-300 placeholder:text-black-900 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>

        <div class="sm:col-span-2">
          <label for="contact_number" class="block text-sm/6 font-medium text-black-900">Contact Number</label>
          <div class="mt-2">
            <input id="contact_number" type="text" name="contact_number" value="{{ $user->contact_number }}" autocomplete="contact_number" class="block w-full rounded-md bg-black px-3 py-1.5 text-base text-black-900 outline-1 -outline-offset-1 outline-white-300 placeholder:text-black-900 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
          </div>
        </div>
        
      </div>
    </div>
    <div class="mt-6 flex items-center justify-end gap-x-6">
    <button type="button" class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">Cancel</button>
    <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 cursor-pointer">Save</button>
  </div>
    </div>
    </form>
</x-layout>
