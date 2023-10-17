<x-admin-layout>
<div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-soft-xl rounded-2xl bg-clip-border">
    <div class="p-6 pb-0 mb-0 bg-white border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
        <h6>{{$title}}</h6>
    </div>
    <div class="flex-auto px-0 pt-0 pb-2">
        <div class="span-1 flex items-center space-x-2 ml-6">
            <a href="{{route('package.create')}}">
                <button class="bg-white mr-2 hover:bg-gray-100 text-sm text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow ml-3">Tambah</button>
            </a>
            <button class="bg-white mr-2 hover:bg-gray-100 text-sm text-gray-800 font-semibold py-1 px-2 border border-gray-400 rounded shadow ml-3">Publish</button>
            <button style="color: red;" class="bg-white mr-2 hover:bg-gray-100 text-sm text-red-900 font-semibold py-1 px-2 border border-gray-400 rounded shadow ml-3">Delete</button>
        </div>
        <div class="p-0 overflow-x-auto">
            <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                <thead class="align-bottom">
                    <tr>
                        <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Packages</th>
                        <th class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">Code</th>
                        <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-gray-200 border-solid shadow-none tracking-none whitespace-nowrap text-slate-400 opacity-70">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($packages as $key=>$item)
                    <tr>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <div class="flex px-2 py-1">
                                <div>
                                    <img src="../assets/img/team-2.jpg" class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-soft-in-out h-9 w-9 rounded-xl" alt="user1" />
                                </div>
                                <div class="flex flex-col justify-center">
                                    <h6 class="mb-0 text-sm leading-normal">{{$item->package_name}}</h6>
                                    <p class="mb-0 text-xs leading-tight text-slate-400">{{$item->community->community_name}}</p>
                                </div>
                            </div>
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            {{$item->package_code}}
                        </td>
                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                            <a href="{{route('package.edit',$item->package_id)}}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <form action="{{route('package.destroy',$item->package_id)}}" method="POST">
                                @csrf @method('DELETE')
                                <button class="text-red-600 hover:text-red-900" onclick="return confirm('Anda Yakin?')" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

</x-admin-layout>