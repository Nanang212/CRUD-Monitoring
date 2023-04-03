@extends('layouts.app')

@section('content')
    <div class="container">
        <section>
            <div class="Content-Header">
                <div class="container mx-auto px-4">
                    <h1 class="text-center text-[45px] pt-6 font-normal md:font-bold">Project Monitoring</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="flex px-8 justify-end ">
                <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                    + Tambah Data
                  </button>
            </div>
            <div class="p-4 m-8 w-95 bg-white shadow-md rounded-2xl">
                <div class="table-responsive px-8">
                    <table id="myTable" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>PROJECT NAME</th>
                                <th>CLIENT</th>
                                <th>PROJECT LEADER</th>
                                <th>START DATE</th>
                                <th>END DATE</th>
                                <th>PROGRESS</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach ($monitoring as $data)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $data->project_name }}</td>
                                <td>{{ $data->client }}</td>
                                <td>
                                    {{ $data->project_leader }}
                                    <p>{{ $data->email }}</p>
                                </td>
                                <td>{{ $data->start_date }}</td>
                                <td>{{ $data->end_date }}</td>
                                <td>
                                    <div class="w-full bg-gray-200 rounded-full dark:bg-gray-700">
                                        <div class="bg-blue-600 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width:{{ $data->progress }}%"> {{$data->progress   }}</div>
                                     </div>  
                                </td>
                                <td>
                                    <div class="flex gap-1">
                                            <a href="{{ route('editmonitoring', $data->id) }}"
                                                class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">
                                                <i><iconify-icon icon="ic:outline-edit"></iconify-icon></i>
                                                </a>
                                            <form action="{{ route('hapusmonitoring', $data->id) }}"
                                                method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="text" value="{{ $data->id }}" name="id" hidden >
                                                <button class="focus:outline-none bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900"
                                                type="submit">
                                                    <i><iconify-icon icon="material-symbols:delete-outline-rounded" style="color: white;"></iconify-icon></i>
                                                </button>
                                            </form>
                                    </div>  
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>

        <!-- Modal Tambah Data Monitoring -->
        <!-- Main modal -->
        <div id="defaultModal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] md:h-full">
            <div class="relative w-full h-full max-w-2xl md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <form method="POST" action="{{ route('addmasuk') }}">
                @csrf
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Tambah Data
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 space-y-1">
                {{-- <input type="text" name="id" id="id" value="0"> --}}
                <div class="mb-6">
                    <label for="project-name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Name</label>
                    <input type="text" id="project-name" name="project_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="client" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">client</label>
                    <input type="text" id="cliet" name="client" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="project-leader" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project Leader</label>
                    <input type="text" id="cliet" name="project_leader" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="start-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Start Date</label>
                    <input type="date" id="start-date" name="start_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="end-date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">End Date</label>
                    <input type="date" id="end-date"  name="end_date" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="progress" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Progress</label>
                    <input type="number" id="progress"  name="progress" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
           
            
                
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Simpan</button>
                <button data-modal-hide="defaultModal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Tutup</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
    <script>
         $(document).ready( function () {
        $('#myTable').DataTable();
        });
    </script>
@endsection