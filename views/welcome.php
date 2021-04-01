This example requires Tailwind CSS v2.0+
<div class="min-h-screen bg-white">

  <header>
    <div class="relative bg-white">
      <div class="flex items-center justify-between px-4 py-6 mx-auto max-w-7xl sm:px-6 md:justify-start md:space-x-10 lg:px-8">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="#">
            <span class="sr-only">Workflow</span>
            <img class="w-auto h-8 sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="">
          </a>
        </div>
        <div class="-my-2 -mr-2 md:hidden">
          <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: outline/menu -->
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
        <nav class="hidden space-x-10 md:flex">
          <div class="relative">
            <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
            <button type="button" class="inline-flex items-center text-base font-medium text-gray-500 bg-white rounded-md group hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" aria-expanded="false">
              <span>Solutions</span>
              <!--
                Heroicon name: solid/chevron-down

                Item active: "text-gray-600", Item inactive: "text-gray-400"
              -->
              <svg class="w-5 h-5 ml-2 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </button>

            <!--
              'Solutions' flyout menu, show/hide based on flyout menu state.

              Entering: "transition ease-out duration-200"
                From: "opacity-0 translate-y-1"
                To: "opacity-100 translate-y-0"
              Leaving: "transition ease-in duration-150"
                From: "opacity-100 translate-y-0"
                To: "opacity-0 translate-y-1"
            -->
            <div class="absolute z-10 w-screen max-w-md mt-3 -ml-4 transform lg:max-w-2xl lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">
              <div class="overflow-hidden rounded-lg shadow-lg ring-1 ring-black ring-opacity-5">
                <div class="relative grid gap-6 px-5 py-6 bg-white sm:gap-8 sm:p-8 lg:grid-cols-2">
                  <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-600 rounded-md sm:h-12 sm:w-12">
                      <!-- Heroicon name: outline/inbox -->
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                      </svg>
                    </div>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">
                        Inbox
                      </p>
                      <p class="mt-1 text-sm text-gray-500">
                        Get a better understanding of where your traffic is coming from.
                      </p>
                    </div>
                  </a>

                  <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-600 rounded-md sm:h-12 sm:w-12">
                      <!-- Heroicon name: outline/annotation -->
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                      </svg>
                    </div>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">
                        Messaging
                      </p>
                      <p class="mt-1 text-sm text-gray-500">
                        Speak directly to your customers in a more meaningful way.
                      </p>
                    </div>
                  </a>

                  <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-600 rounded-md sm:h-12 sm:w-12">
                      <!-- Heroicon name: outline/chat-alt-2 -->
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                      </svg>
                    </div>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">
                        Live Chat
                      </p>
                      <p class="mt-1 text-sm text-gray-500">
                        Your customers&#039; data will be safe and secure.
                      </p>
                    </div>
                  </a>

                  <a href="#" class="flex items-start p-3 -m-3 rounded-lg hover:bg-gray-50">
                    <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-600 rounded-md sm:h-12 sm:w-12">
                      <!-- Heroicon name: outline/question-mark-circle -->
                      <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                      </svg>
                    </div>
                    <div class="ml-4">
                      <p class="text-base font-medium text-gray-900">
                        Knowledge Base
                      </p>
                      <p class="mt-1 text-sm text-gray-500">
                        Connect with third-party tools that you&#039;re already using.
                      </p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
            Pricing
          </a>
          <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
            Partners
          </a>
          <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
            Company
          </a>
        </nav>
        <div class="items-center justify-end hidden md:flex md:flex-1 lg:w-0">
          <a href="#" class="text-base font-medium text-gray-500 whitespace-nowrap hover:text-gray-900">
            Sign in
          </a>
          <a href="#" class="inline-flex items-center justify-center px-4 py-2 ml-8 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm whitespace-nowrap hover:bg-indigo-700">
            Sign up
          </a>
        </div>
      </div>

      <!--
        Mobile menu, show/hide based on mobile menu state.

        Entering: "duration-200 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
      <div class="absolute inset-x-0 top-0 z-30 p-2 transition origin-top-right transform md:hidden">
        <div class="bg-white divide-y-2 rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 divide-gray-50">
          <div class="px-5 pt-5 pb-6">
            <div class="flex items-center justify-between">
              <div>
                <img class="w-auto h-8" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg" alt="Workflow">
              </div>
              <div class="-mr-2">
                <button type="button" class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                  <span class="sr-only">Close menu</span>
                  <!-- Heroicon name: outline/x -->
                  <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="mt-6">
              <nav class="grid grid-cols-1 gap-7">
                <a href="#" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                  <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-600 rounded-md">
                    <!-- Heroicon name: outline/inbox -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Inbox
                  </div>
                </a>

                <a href="#" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                  <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-600 rounded-md">
                    <!-- Heroicon name: outline/annotation -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Messaging
                  </div>
                </a>

                <a href="#" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                  <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-600 rounded-md">
                    <!-- Heroicon name: outline/chat-alt-2 -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Live Chat
                  </div>
                </a>

                <a href="#" class="flex items-center p-3 -m-3 rounded-lg hover:bg-gray-50">
                  <div class="flex items-center justify-center flex-shrink-0 w-10 h-10 text-white bg-indigo-600 rounded-md">
                    <!-- Heroicon name: outline/question-mark-circle -->
                    <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Knowledge Base
                  </div>
                </a>
              </nav>
            </div>
          </div>
          <div class="px-5 py-6">
            <div class="grid grid-cols-2 gap-4">
              <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                Pricing
              </a>

              <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                Partners
              </a>

              <a href="#" class="text-base font-medium text-gray-900 hover:text-gray-700">
                Company
              </a>
            </div>
            <div class="mt-6">
              <a href="#" class="flex items-center justify-center w-full px-4 py-2 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700">
                Sign up
              </a>
              <p class="mt-6 text-base font-medium text-center text-gray-500">
                Existing customer?
                <a href="#" class="text-gray-900">
                  Sign in
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <main>
    <div>
      <!-- Hero card -->
      <div class="relative">
        <div class="absolute inset-x-0 bottom-0 bg-gray-100 h-1/2"></div>
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
            <div class="absolute inset-0">
              <img class="object-cover w-full h-full" src="https://images.unsplash.com/photo-1521737852567-6949f3f9f2b5?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2830&q=80&sat=-100" alt="People working on laptops">
              <div class="absolute inset-0 bg-indigo-700" style="mix-blend-mode: multiply;"></div>
            </div>
            <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
              <h1 class="text-4xl font-extrabold tracking-tight text-center sm:text-5xl lg:text-6xl">
                <span class="block text-white">Take control of your</span>
                <span class="block text-indigo-200">customer support</span>
              </h1>
              <p class="max-w-lg mx-auto mt-6 text-xl text-center text-indigo-200 sm:max-w-3xl">
                Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet fugiat veniam occaecat fugiat aliqua.
              </p>
              <div class="max-w-sm mx-auto mt-10 sm:max-w-none sm:flex sm:justify-center">
                <div class="space-y-4 sm:space-y-0 sm:mx-auto sm:inline-grid sm:grid-cols-2 sm:gap-5">
                  <a href="#" class="flex items-center justify-center px-4 py-3 text-base font-medium text-indigo-700 bg-white border border-transparent rounded-md shadow-sm hover:bg-indigo-50 sm:px-8">
                    Get started
                  </a>
                  <a href="#" class="flex items-center justify-center px-4 py-3 text-base font-medium text-white bg-indigo-500 border border-transparent rounded-md shadow-sm bg-opacity-60 hover:bg-opacity-70 sm:px-8">
                    Live demo
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Logo cloud -->
      <div class="bg-gray-100">
        <div class="px-4 py-16 mx-auto max-w-7xl sm:px-6 lg:px-8">
          <p class="text-sm font-semibold tracking-wide text-center text-gray-500 uppercase">
            Trusted by over 5 very average small businesses
          </p>
          <div class="grid grid-cols-2 gap-8 mt-6 md:grid-cols-6 lg:grid-cols-5">
            <div class="flex justify-center col-span-1 md:col-span-2 lg:col-span-1">
              <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
            </div>
            <div class="flex justify-center col-span-1 md:col-span-2 lg:col-span-1">
              <img class="h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
            </div>
            <div class="flex justify-center col-span-1 md:col-span-2 lg:col-span-1">
              <img class="h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
            </div>
            <div class="flex justify-center col-span-1 md:col-span-2 md:col-start-2 lg:col-span-1">
              <img class="h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Transistor">
            </div>
            <div class="flex justify-center col-span-2 md:col-span-2 md:col-start-4 lg:col-span-1">
              <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation">
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- More main page content here... -->
  </main>
</div>

