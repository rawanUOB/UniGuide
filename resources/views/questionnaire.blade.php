<div class="max-w-5xl mx-auto py-10">

    {{-- Header --}}
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold mb-3">Find Your Perfect Major</h1>
        <p class="text-base-content/60">Answer honestly, there are no right or wrong answers.</p>
    </div>

    <form method="POST" action="{{ route('ai.predict') }}">
        @csrf
        {{-- Q1: what do they think about math --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">1. How do you feel about working with numbers, equations or calculations?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="math" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">I avoid them as much as possible</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="math" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I can handle basic maths but nothing complex</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="math" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I'm comfortable with maths when needed</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="math" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I genuinely enjoy maths and find it satisfying</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="math" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I love maths, the harder the better</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q2: is the student creative --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">2. When given a free task, how do you typically approach it?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="creativity" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">I feel lost and I prefer clear instructions</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="creativity" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I follow examples rather than creating something new</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="creativity" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I add small creative touches here and there</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="creativity" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I enjoy coming up with original ideas</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="creativity" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I thrive on full creative freedom</span>
                    </label>
                </div>
            </div>
        </div>
        
        {{-- Q3: problem solving  --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">3. You're stuck on a difficult problem. What would you normally do?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="problem_solving" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">I ask someone else to handle it</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="problem_solving" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I try a couple of things then give up</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="problem_solving" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I work through it step by step</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="problem_solving" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I enjoy the challenge and try multiple approaches</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="problem_solving" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I can't stop until I've figured it out</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q4: communication skills or social skills --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">4. How comfortable are you speaking or presenting ideas to others?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="communication_skills" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">Very uncomfortable. I prefer working quietly alone</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="communication_skills" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I manage when I have to, but I don't enjoy it</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="communication_skills" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I communicate fine in most situations</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="communication_skills" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I'm confident and clear when talking to people</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="communication_skills" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I love expressing ideas and connecting with people</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q5: love for technology --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">5. How do you feel about computers, software, and technology in general?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="technology_interest" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">I use technology only when I absolutely have to</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="technology_interest" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I know the basics but don't go deeper</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="technology_interest" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I'm comfortable with tech and learn new tools easily</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="technology_interest" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I enjoy exploring new technologies in my free time</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="technology_interest" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">Technology fascinates me, I always want to know how things work</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q6: leadership  --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">6. In a group project, what role do you typically take?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="leadership" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">I prefer to follow and complete assigned tasks</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="leadership" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I contribute ideas but let others take charge</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="leadership" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I step up if no one else does</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="leadership" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I naturally organise the group and set direction</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="leadership" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I always lead, I have a clear vision and take charge</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q7: Analytical Thinking --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">7. When faced with a complex issue, which describes you best?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="analytical_thinking" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">I go with my gut feeling</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="analytical_thinking" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I consider a few options then decide quickly</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="analytical_thinking" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I weigh pros and cons before deciding</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="analytical_thinking" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I research thoroughly and analyse all angles</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="analytical_thinking" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I build structured frameworks before reaching any conclusion</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q8: Attention to Detail --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">8. You've just finished working on a project. What do you do next?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="attention_to_details" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">I submit it as soon as it's done</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="attention_to_details" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I do a quick skim for any mistakes</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="attention_to_details" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I review it carefully once before submitting</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="attention_to_details" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I go through it multiple times checking everything</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="attention_to_details" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I can't submit until every single detail is perfect</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q9: about biology --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">9. How do you feel about topics like the human body or living organisms?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="biology_interest" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">It doesn't interest me at all</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="biology_interest" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I find it okay but wouldn't study it by choice</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="biology_interest" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I find it interesting when it comes up</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="biology_interest" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I actively enjoy learning about biology and health</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="biology_interest" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I'm fascinated by how living things work</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q10: Fitness (for sports) --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">10. How important is physical activity or sports in your life?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="fitness_interest" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">It's not something I think about</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="fitness_interest" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I exercise occasionally but it's not a priority</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="fitness_interest" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I stay active and care about my health</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="fitness_interest" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">Sport and fitness are a big part of my life</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="fitness_interest" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I'm seriously dedicated to physical performance or sports</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q11: do they like teamwork or solo jobs --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">11. Which environment do you thrive in?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="teamwork" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">Alone, I work much better by myself</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="teamwork" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">Mostly alone with occasional collaboration</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="teamwork" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">A mix of both depending on the task</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="teamwork" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I prefer working with a team most of the time</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="teamwork" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I thrive in team environments, I love collaborating with others</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q12: for stress handling jobs  --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">12. How do you handle high-pressure situations, such as tight deadlines?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="stress_tolerance" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">I struggle a lot and feel overwhelmed</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="stress_tolerance" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I get through it but it takes a toll on me</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="stress_tolerance" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I manage okay and recover fairly quickly</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="stress_tolerance" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I stay calm and work well under pressure</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="stress_tolerance" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">Pressure sharpens my focus. I perform better under stress</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q13: how strongly they feel about ethics --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">13. How much do questions of right and wrong, fairness or justice matter to you?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="ethics" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">I focus on practical outcomes more</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="ethics" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I consider ethics when it's clearly relevant</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="ethics" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I feel strongly about justice and doing what's right</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="ethics" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">Ethics and fairness are important to me in most decisions</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="ethics" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">Ethical integrity is central to everything I do</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q14: Patience --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">14. How do you feel when tasks take a long time to show results?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="patience" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">I get frustrated quickly if I don't see progress</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="patience" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I can be patient for a short while</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="patience" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I stay committed as long as I understand the goal</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="patience" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I'm comfortable with long processes and gradual progress</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="patience" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I'm very patient because I know good things take time</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q15: Empathy level --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">15. When someone around you is going through a hard time, what do you normally do?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="empathy" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">I feel awkward and don't know how to act</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="empathy" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I acknowledge it briefly but don't dig deeper</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="empathy" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I check in on them and offer help if they need it</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="empathy" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I genuinely feel what they're going through and want to support them</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="empathy" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I naturally become the person people come to, listening deeply is something I do without thinking</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q16: do they have a good imagination? --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">16. When someone describes a room or building, what happens in your mind?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="spatial_thinking" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">I just hear the words, I don't really picture anything</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="spatial_thinking" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I get a vague, blurry idea of the space</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="spatial_thinking" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I can picture it roughly but not in detail</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="spatial_thinking" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I visualise it clearly and naturally</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="spatial_thinking" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I immediately see it in full 3D detail in my mind</span>
                    </label>
                </div>
            </div>
        </div>

        {{-- Q17: how do they feel about doing researchs --}}
        <div class="card bg-base-100 shadow-sm mb-4">
            <div class="card-body">
                <p class="font-semibold text-base mb-3">17. If you're curious about something, what do you usually do?</p>
                <div class="flex flex-col gap-2">
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="research_drive" value="0.1" class="radio radio-primary radio-sm" required>
                        <span class="text-sm">I think about it briefly then move on</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="research_drive" value="0.3" class="radio radio-primary radio-sm">
                        <span class="text-sm">I look it up quickly and stop at the first answer</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="research_drive" value="0.5" class="radio radio-primary radio-sm">
                        <span class="text-sm">I read a bit until I feel I understand it</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="research_drive" value="0.8" class="radio radio-primary radio-sm">
                        <span class="text-sm">I go deep and read multiple sources and pages</span>
                    </label>
                    <label class="flex items-center gap-3 cursor-pointer p-2 rounded-lg hover:bg-base-200 transition">
                        <input type="radio" name="research_drive" value="1.0" class="radio radio-primary radio-sm">
                        <span class="text-sm">I can spend hours going down rabbit holes, I get completely obsessed until I fully understand something</span>
                    </label>
                </div>
            </div>
        </div>

        <div class="text-center mt-8">
            <button type="submit" class="btn btn-primary btn-wide btn-lg">
                Find Your Academic Path
            </button>
        </div>
    </form>
</div>
