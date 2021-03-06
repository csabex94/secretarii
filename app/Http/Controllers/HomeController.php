<?php

namespace App\Http\Controllers;

use App\Models\TopicConversation;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Topic;
use App\Models\User;

class HomeController extends Controller
{
    public function index(Request $request): \Inertia\Response
    {
        $result = [];
        $response = [];
        $currentRightSide = 'groups';
        if (isset($request->fc)) {
            $result = User::where('email', 'LIKE', "%$request->fc%")->orWhere('name', 'LIKE', "%$request->fc%")->get();
            $currentRightSide = 'add-contact';
        }

        if (isset($request->topicId)) {
            $response = TopicConversation::where([
                ['team_id', $request->user()->current_team_id],
                ['topic_id', $request->topicId]
            ])->with('createdBy')->orderBy('created_at', 'ASC')->get();
        }

        return Inertia::render('Home', [
            'findContacts' => $result,
            'rightSide' => $currentRightSide,
            'currentTopics' => Topic::where('team_id', $request->user()->current_team_id)->with('createdBy')->orderBy('created_at', 'DESC')->get(),
            'currentTopicConversations' => $response,
            'middleSection' => $request->topicId ? 'topic-conversations' : 'topics'
        ]);
    }
}
