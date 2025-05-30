<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kegiatan;        
use App\Models\Announcement;    
use Carbon\Carbon;
use App\Models\Partitur;              
use Illuminate\Support\Str;     
use Illuminate\Support\Facades\Auth; 


class UserPageController extends Controller
{
    /**
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

        $upcomingKegiatans = Kegiatan::whereDate('waktu_mulai', '>=', Carbon::today())
                                       
                                        ->orderBy('waktu_mulai', 'asc') 
                                        ->get();
                                        
        $latestAnnouncements = Announcement::orderBy('created_at', 'desc')
                                            ->limit(5)
                                            ->get();

        
        return view('userBC.userbcdashboard', compact('upcomingKegiatans', 'latestAnnouncements'));
    }


    public function showAnnouncements()
    {
        $announcements = Announcement::orderBy('created_at', 'desc')->get();
        return view('userBC.pengumuman', compact('announcements')); 
    }

    
    public function showUserKegiatan()
    {
        $upcomingKegiatans = Kegiatan::whereDate('waktu_mulai', '>=', Carbon::today())
                                    ->orderBy('waktu_mulai', 'asc')
                                    ->get();
        return view('userBC.kegiatan', compact('upcomingKegiatans')); 
    }

    //partitur
    public function showPartiturs(Request $request)
    {
        $queryPencarian = $request->input('search'); 
        $partitursQuery = Partitur::orderBy('created_at', 'desc');
        //cri dngan jdul
        if ($queryPencarian) {
            $partitursQuery->where('judul', 'LIKE', "%{$queryPencarian}%");
        }

        //$partiturs = $partitursQuery->get();
        $partiturs = $partitursQuery->paginate(12); //12 partitur/hal

        return view('userBC.partitur', compact('partiturs', 'queryPencarian'));
    }


}