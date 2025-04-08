<x-default-layout title="Majors" section_title="Majors detail">
    <div class="grid grid-cols-3">
        <div
            class="flex flex-col gap-4 px-6 py-4 bg-white border border-t-4 border-zinc-300 shadow col-span-3 md:col-span-2">
            <div class="grid sm:grid-cols-2 gap-4">
                <div class="flex flex-col gap-2">
                    <div>Name</div>
                    <div class="px-3 py-2 border border-zinc-300 ">Majors Name Here</div>
                </div>
                <div class="flex flex-col gap-2">
                    <div>Majors Code</div>
                    <div class="px-3 py-2 border border-zinc-300 ">F55122000</div>
                </div>
            </div>
            <div class="flex flex-col gap-2">
                <div>Description</div>
                <div class="px-3 py-2 border border-zinc-300 ">Description here</div>
            </div>
            <div class="self-end flex gap-2">
                <a href="{{ route("majors.index") }}"
                    class=" bg-slate-50 border border-slate-500 text-slate-500 px-3 py-2 cursor-pointer">
                    <span>Back</span>
                </a>
                <a href="{{ route("majors.edit", 1) }}"
                    class=" bg-yellow-50 border border-yellow-500 text-yellow-500 px-3 py-2 flex items-center gap-2 cursor-pointer">
                    <i class="ph ph-note-pencil block text-yellow-500"></i>
                    <span>Edit</span>
                </a>
            </div>
        </div>
    </div>
</x-default-layout>