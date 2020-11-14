<x-app-layout>
    <div class="intro-y flex items-center h-10">
        <h2 class="text-lg font-medium truncate mr-5">
            Loans
        </h2>
        <a href="/loans" class="ml-auto flex text-theme-1 dark:text-theme-10"> <i data-feather="refresh-ccw" class="w-4 h-4 mr-3"></i> Reload Data </a>
    </div>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="col-span-12 sm:col-span-12 xl:col-span-12 intro-y">
            <!-- BEGIN: Responsive Table -->
            <div class="intro-y box mt-5">                
                <div class="p-5" id="responsive-table">
                    <div class="preview">
                        <div class="overflow-x-auto">
                            <table class="table">
                                <thead>
                                    <tr>                                       
                                        <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Date Disbursed</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Amount</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Interest</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Balance</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-no-wrap">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($loans as $loan)
                                    <tr @if($loan->balance > 0)class="bg-red-200" @endif>
                                        <td class="border-b whitespace-no-wrap">{{$loan->created_at}}</td>
                                        <td class="border-b whitespace-no-wrap">${{$loan->amount}}</td>
                                        <td class="border-b whitespace-no-wrap">${{$loan->interest}}</td>
                                        <td class="border-b whitespace-no-wrap">${{$loan->balance}}</td>
                                        <td class="border-b whitespace-no-wrap">
                                            <a class="flex items-center mr-3" href="/loans/{{$loan->id}}"> <i data-feather="eye" class="w-4 h-4 mr-1"></i> View </a>
                                        </td>
                                    </tr>   
                                    @endforeach                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="source-code hidden">
                        <button data-target="#copy-responsive-table" class="copy-code button button--sm border flex items-center text-gray-700 dark:border-dark-5 dark:text-gray-300"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Copy example code </button>
                        <div class="overflow-y-auto h-64 mt-3">
                            <pre class="source-preview" id="copy-responsive-table"> <code class="text-xs p-0 rounded-md html pl-5 pt-8 pb-4 -mb-10 -mt-10"> HTMLOpenTagdiv class=&quot;overflow-x-auto&quot;HTMLCloseTag HTMLOpenTagtable class=&quot;table&quot;HTMLCloseTag HTMLOpenTagtheadHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-no-wrap&quot;HTMLCloseTag#HTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-no-wrap&quot;HTMLCloseTagFirst NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-no-wrap&quot;HTMLCloseTagLast NameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-no-wrap&quot;HTMLCloseTagUsernameHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-no-wrap&quot;HTMLCloseTagEmailHTMLOpenTag/thHTMLCloseTag HTMLOpenTagth class=&quot;border-b-2 dark:border-dark-5 whitespace-no-wrap&quot;HTMLCloseTagAddressHTMLOpenTag/thHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/theadHTMLCloseTag HTMLOpenTagtbodyHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTag1HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTagAngelinaHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTagJolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTag@angelinajolieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTagangelinajolie@gmail.comHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTag260 W. Storm Street New York, NY 10025.HTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTag2HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTagBradHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTagPittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTag@bradpittHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTagbradpitt@gmail.comHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTag47 Division St. Buffalo, NY 14241.HTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTagtrHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTag3HTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTagCharlieHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTagHunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTag@charliehunnamHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTagcharliehunnam@gmail.comHTMLOpenTag/tdHTMLCloseTag HTMLOpenTagtd class=&quot;border-b whitespace-no-wrap&quot;HTMLCloseTag8023 Amerige Street Harriman, NY 10926.HTMLOpenTag/tdHTMLCloseTag HTMLOpenTag/trHTMLCloseTag HTMLOpenTag/tbodyHTMLCloseTag HTMLOpenTag/tableHTMLCloseTag HTMLOpenTag/divHTMLCloseTag </code> </pre>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END: Responsive Table -->
        </div>
    </div>
</x-app-layout>
