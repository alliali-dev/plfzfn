@if (session('success'))
    <div class="alert bg-green-200 rounded-lg p-4 mb-8 text-base text-700 inline-flex items-center w-full alert-dismissible fade show"
        role="alert">
        <p class="mb-0">{{ 'Enregistrement réussi, bravo! Vous pouvez faire un autre. Merci!' }}</p>
        <button type="button"
            class="btn-close box-content w-4 h-4 p-1 ml-auto text-green-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-green-900 hover:opacity-75 hover:no-underline"
            data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@elseif(session('danger'))
    <div class="alert bg-red-200 rounded-lg p-4 mb-8 text-base text-700 inline-flex items-center w-full alert-dismissible fade show"
        role="alert">
        <p class="mb-0">{{ 'Enregistrement échoué! Veuillez reéssayer svp!' }}</p>
        <button type="button"
            class="btn-close box-content w-4 h-4 p-1 ml-auto text-red-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-red-900 hover:opacity-75 hover:no-underline"
            data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@elseif(session('image'))
    <div class="alert bg-red-100 rounded-lg p-4 mb-8 text-base text-700 inline-flex items-center w-full alert-dismissible fade show"
        role="alert">
        <p class="mb-0">{{ 'ERREUR: les photos choisies doivent etre de type: jpg, jpeg, png!' }}</p>
        <button type="button"
            class="btn-close box-content w-4 h-4 p-1 ml-auto text-red-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-red-900 hover:opacity-75 hover:no-underline"
            data-bs-dismiss="alert" aria-label="Close">&times;</button>
    </div>
@else
    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
        <path
            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
        </path>
    </svg>
    <span class="text-center">HARTOURISM</span>
@endif
