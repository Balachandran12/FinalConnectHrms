<x-dynamic-component :component="$getEntryWrapperView()" :entry="$entry">
    <div class="">
        {{ $getState() }}
        {{-- Arrow Section start  --}}
        <div class=" flex items-center gap-x-4 border-b border-[#D1D5D8] arrow-section">
            <div class=" border border-[#091E4224] rounded w-fit cursor-pointer">
                <img src="/icon/left-arrow.svg" alt="">
            </div>
            <div class=" border border-[#091E4224] rounded w-fit cursor-pointer">
                <img src="/icon/right-arrow.svg" alt="">
            </div>
        </div>
        {{-- Arrow Section end  --}}
        <div class=" border-b border-[#EFEFEF] py-5 flex items-center gap-x-2.5">
            <img src="/images/profile.png" alt="" class=" w-20 h-20">
            <div>
                <h1 class=" text-[#09101D] font-medium text-xl">Sridharan</h1>
                <h1 class=" text-[#6B7280] font-medium mt-1">UI/UX Designer</h1>
            </div>
        </div>

        {{-- Contact Information Section Start  --}}
        <div class=" border-b border-[#EFEFEF] py-5">
            <h1 class=" font-medium text-lg">Contact Information</h1>
            <div class=" grid grid-cols-2 w-fit mt-5">
                <div class=" contact">
                    <h3 class=" text-sm text-[#09101D]">Phone Number</h3>
                    <h3 class=" text-sm text-[#09101D]">Emergency Number</h3>
                    <h3 class=" text-sm text-[#09101D]">Email Address</h3>
                </div>
                <div class=" contact">
                    <h4 class=" text-sm text-[#5E5E5E]">+91 9597308088</h4>
                    <h4 class=" text-sm text-[#5E5E5E]">+91 9080983322</h4>
                    <h4 class=" text-sm text-[#5E5E5E]">ssridharansriram@gmail.com</h4>
                </div>
            </div>
        </div>
        {{-- Contact Information Section end  --}}

        {{-- Work Information Section start  --}}
        <div class=" border-b border-[#EFEFEF] py-5">
            <h1 class=" font-medium text-lg">Work Information</h1>
            <div class=" w-fit mt-5 work">
                <div class=" contact">
                    <h3 class=" text-sm text-[#09101D] pt-10">Employee ID</h3>
                    <h3 class=" text-sm text-[#09101D]">Department</h3>
                </div>
                <div class=" contact">
                    <h4 class=" text-sm text-[#5E5E5E]">SF00012</h4>
                    <h4 class=" text-sm text-[#5E5E5E]">Design</h4>
                </div>
            </div>
        </div>
        {{-- Work Information Section end  --}}

        {{-- Personal Information Section start  --}}
        <div class=" py-5">
            <h1 class=" font-medium text-lg">Personal Information</h1>
            <div class=" grid grid-cols-2 w-fit mt-5">
                <div class=" contact">
                    <h3 class=" text-sm text-[#09101D]">Full Name</h3>
                    <h3 class=" text-sm text-[#09101D]">Gender</h3>
                    <h3 class=" text-sm text-[#09101D]">Date Of Birth</h3>
                    <h3 class=" text-sm text-[#09101D]">Address</h3>
                    <h3 class=" text-sm text-[#09101D]">City </h3>
                    <h3 class=" text-sm text-[#09101D]">State</h3>
                </div>
                <div class=" contact">
                    <h4 class=" text-sm text-[#5E5E5E]">Sridharan</h4>
                    <h4 class=" text-sm text-[#5E5E5E]">Male</h4>
                    <h4 class=" text-sm text-[#5E5E5E]">31 Oct, 2000</h4>
                    <h4 class=" text-sm text-[#5E5E5E]">1/103, A, Main Street, Madurai</h4>
                    <h4 class=" text-sm text-[#5E5E5E]">Madurai</h4>
                    <h4 class=" text-sm text-[#5E5E5E]">Tamil Nadu</h4>
                </div>
            </div>
        </div>
        {{-- Personal Information Section end  --}}
    </div>
</x-dynamic-component>
