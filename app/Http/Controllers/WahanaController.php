<?php
namespace App\Http\Controllers;
use DB;
use Session;
use Validator;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
class WahanaController extends Controller
{
    public function __construct()
    {
        $this->module = ucwords(str_replace("_"," ",'wahana'));
    }
    public function index()
    {
        $data = [
            'module'        => $this->module,
            'breadcrumb'    => ['portal','wahana','list'],
            'list'          => Event::where(['is_active'=>1])->get(),
        ];
        return view('portal.wahana.index',$data);
    }
    public function detail()
    {
    }
    public function create()
    {
        $data = [
            'form_action'   => URL::to('/portal/wahana/store'),
            'form_method'   => 'POST',
            'category'      => Category::where(['is_active'=>'1','category_group'=>'event_category'])->orderBy('name','asc')->get(),
        ];
        return view('portal.wahana.create',$data);
    }
    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'name'              => 'required|max:255',
            'category_id'       => 'required|max:255',
            'tanggal_mulai'     => 'required|max:255',
            'tanggal_selesai'   => 'required|max:255',
            'waktu_mulai'       => 'required|max:255',
            'waktu_selesai'     => 'required|max:255',
            'description'       => 'nullable|string',
            'location'          => 'required|max:255',
            'file'              => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }

        $file               = $request->file('file');
        // if ($file) {
        //     // Display the MIME type
        //     $mimeType = $file->getMimeType();
        //     dd($mimeType);
        // }
        // exit;
        $originalFileName   = $file->getClientOriginalName();
        $customFileName     = base64_encode(time().'_'.$originalFileName);
        $filePath           = $file->storeAs('asssets/uploads/wahana', $customFileName, 'public');
        
        // $query = new Event();
        // $query->name        = $input['name'];
        // $query->type        = $input['category_id'];
        // $query->description = $input['description'];
        // $query->label_time  = json_encode([
        //     'tanggal'   => $input['tanggal_mulai']." - ".$input['tanggal_selesai'],
        //     'waktu'     => $input['waktu_mulai']." - ".$input['waktu_selesai'],
        // ]);
        // $query->label_location = json_encode([$input['location']]);
        // $query->file_path   = $filePath;
        // $query->content     = null;
        // $query->is_active   = "1";
        // $query->created_at  = date('Y-m-d H:i:s');
        // $query->created_by  = $request->session()->get('id');
        // $query->save();
        $data = [
            'name'          => $input['name'],
            'type'          => $input['category_id'],
            'description'   => $input['description'],
            'label_time'    => json_encode([
                'tanggal'   => $input['tanggal_mulai']." - ".$input['tanggal_selesai'],
                'waktu'     => $input['waktu_mulai']." - ".$input['waktu_selesai'],
            ]),
            'label_location'=> json_encode([$input['location']]),
            'file_path'     => $filePath,
            'content'       => null,
            'is_active'     => "1",
            'created_at'    => date('Y-m-d H:i:s'),
            'created_by'    => $request->session()->get('id'),
        ];
        $id = DB::table('event')->insertGetid($data);
        $request->session()->flash('alert',['class'=>'success','message'=>'Data saved!']);
        return redirect('/portal/wahana/detail/'.base64_encode($id));
    }
    public function edit()
    {
        $data = [
            'form_action'   => URL::to('/portal/wahana/store'),
            'form_method'   => 'POST',
            'category'      => Category::where(['is_active'=>'1','category_group'=>'event_category'])->orderBy('name','asc')->get(),
        ];
        return view('portal.wahana.edit',$data);
    }
    public function update(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'id'                => 'required|max:255',
            'name'              => 'required|max:255',
            'category_id'       => 'required|max:255',
            'tanggal_mulai'     => 'required|max:255',
            'tanggal_selesai'   => 'required|max:255',
            'waktu_mulai'       => 'required|max:255',
            'waktu_selesai'     => 'required|max:255',
            'description'       => 'nullable|string',
            'location'          => 'required|max:255',
            'file'              => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        $data = [
            'name'          => $input['name'],
            'type'          => $input['category_id'],
            'description'   => $input['description'],
            'label_time'    => json_encode([
                'tanggal'   => $input['tanggal_mulai']." - ".$input['tanggal_selesai'],
                'waktu'     => $input['waktu_mulai']." - ".$input['waktu_selesai'],
            ]),
            'label_location'=> json_encode([$input['location']]),
            'file_path'     => $filePath,
            'content'       => null,
            'is_active'     => "1",
            'created_at'    => date('Y-m-d H:i:s'),
            'created_by'    => $request->session()->get('id'),
        ];
        $id = DB::table('event')->where(['id'=>base64_decode($input['id'])])->update($data);
    }
    public function remove(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'id'        => 'required|max:255',
        ]);
        if ($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        $data = Event::where(['id'=>base64_decode($id)])->first();
        $data->is_active = '0';
        $data->save(false);
        return back();
    }
}