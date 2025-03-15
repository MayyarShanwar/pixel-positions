<x-layout>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-3 md:gap-10">
        <img src="{{ asset('storage/logos/tg7O8rhAVNUGVpdEZoWhX5eryQTAezeWLU3wwi4H.png') }}" alt=""
            class="rounded-md">
        <div class="flex flex-col gap-5 p-3">
            <div>Title: <strong>Teacher</strong></div>
            <div>Salary: <strong>60,000 $</strong></div>
            <div>Location: <strong>Syria ,Damascus ,Al_Malki</strong></div>
            <div>Schedule: <strong>Full Time</strong></div>
            <div>URL: <strong>https://jobs.com</strong></div>
            <div>Tags:
                <span>Tag</span>
                <span>Tag</span>
                <span>Tag</span>
            </div>
        </div>
    </div>

    <div class="flex justify-center mt-7">
        <div class="flex gap-5 justify-center w-1/3">
            <button type='submit'
                class="flex-1 mt-2 cursor-pointer bg-blue-600 text-white font-medium rounded-md px-4 py-2 flex items-center justify-center hover:bg-red-800 transition duration-300 ease-in-out shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M15.891 3.048a3.578 3.578 0 1 1 5.061 5.06l-.892.893L15 3.94zM13.94 5.001L3.94 15a3.1 3.1 0 0 0-.825 1.476L2.02 21.078a.75.75 0 0 0 .904.903l4.601-1.096a3.1 3.1 0 0 0 1.477-.825L19 10.061z" />
                </svg> &nbsp;
                Edit
            </button>
            <button type='submit'
                class="flex-1 mt-2 cursor-pointer bg-blue-600 text-white font-medium rounded-md px-4 py-2 flex items-center justify-center hover:bg-red-800 transition duration-300 ease-in-out shadow-lg">
                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 28 28">
                    <path fill="currentColor"
                        d="M11.5 6h5a2.5 2.5 0 0 0-5 0M10 6a4 4 0 0 1 8 0h6.25a.75.75 0 0 1 0 1.5h-1.31l-1.217 14.603A4.25 4.25 0 0 1 17.488 26h-6.976a4.25 4.25 0 0 1-4.235-3.897L5.06 7.5H3.75a.75.75 0 0 1 0-1.5zm2.5 5.75a.75.75 0 0 0-1.5 0v8.5a.75.75 0 0 0 1.5 0zm3.75-.75a.75.75 0 0 0-.75.75v8.5a.75.75 0 0 0 1.5 0v-8.5a.75.75 0 0 0-.75-.75" />
                </svg> &nbsp;
                Delete
            </button>
        </div>
    </div>

</x-layout>
