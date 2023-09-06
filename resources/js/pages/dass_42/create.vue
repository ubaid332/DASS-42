<template>
    <h2>Submit a new survey</h2>
        <div class="card">
            
  <div class="card-body">
        
        <form @submit.prevent="submitSurvey">
            <div v-for="(question, index) in questions" :key="index">
                <h4>{{ ++index }} -  {{ question.text }}</h4>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item" v-for="option in question.options" :key="option.id">
                        <label>
                            <input type="radio" :name="question.id" :value="option.id" v-model="responses[question.id]">
                            {{ option.text }}
                        </label>
                    </li>
                </ul>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>
  
</template>

<script>

export default {
   
    data() {
        return {
            submitBtn: true,
            loadingBtn: false,
            questions: [
                // Define your questions and options here
                {
                    id: 'Q1A',
                    text: 'I found myself getting upset by quite trivial things',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q2A',
                    text: 'I was aware of dryness of my mouth',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q3A',
                    text: 'I couldn\'t seem to experience any positive feeling at all',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q4A',
                    text: 'I experienced breathing difficulty (eg, excessively rapid breathing, breathlessness in the absence of physical exertion)',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q5A',
                    text: 'I just couldn\'t seem to get going',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q6A',
                    text: 'I tended to over-react to situations',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q7A',
                    text: 'I had a feeling of shakiness (eg, legs going to give way)',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q8A',
                    text: 'I found it difficult to relax',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q9A',
                    text: 'I found myself in situations that made me so anxious I was most relieved when they ended',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q10A',
                    text: 'I felt that I had nothing to look forward to',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q11A',
                    text: 'I found myself getting upset rather easily',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q12A',
                    text: 'I felt that I was using a lot of nervous energy',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q13A',
                    text: 'I felt sad and depressed',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q14A',
                    text: 'I found myself getting impatient when I was delayed in any way (eg, elevators, traffic lights, being kept waiting)',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q15A',
                    text: 'I had a feeling of faintness',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q16A',
                    text: 'I felt that I had lost interest in just about everything',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q17A',
                    text: 'I felt I wasn\'t worth much as a person',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q18A',
                    text: 'I felt that I was rather touchy',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q19A',
                    text: 'I perspired noticeably (eg, hands sweaty) in the absence of high temperatures or physical exertion',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q20A',
                    text: 'I felt scared without any good reason',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q21A',
                    text: 'I felt that life wasn\'t worthwhile',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q22A',
                    text: 'I found it hard to wind down',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q23A',
                    text: 'I had difficulty in swallowing',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q24A',
                    text: 'I couldn\'t seem to get any enjoyment out of the things I did',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q25A',
                    text: 'I was aware of the action of my heart in the absence of physical exertion (eg, sense of heart rate increase, heart missing a beat)',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q26A',
                    text: 'I felt down-hearted and blue',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q27A',
                    text: 'I found that I was very irritable',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q28A',
                    text: 'I felt I was close to panic',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q29A',
                    text: 'I found it hard to calm down after something upset me',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q30A',
                    text: 'I feared that I would be "thrown" by some trivial but unfamiliar task',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q31A',
                    text: 'I was unable to become enthusiastic about anything',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q32A',
                    text: 'I found it difficult to tolerate interruptions to what I was doing',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q33A',
                    text: 'I was in a state of nervous tension',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q34A',
                    text: 'I felt I was pretty worthless',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q35A',
                    text: 'I was intolerant of anything that kept me from getting on with what I was doing',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q36A',
                    text: 'I felt terrified',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q37A',
                    text: 'I could see nothing in the future to be hopeful about',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q38A',
                    text: 'I felt that life was meaningless',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q39A',
                    text: 'I found myself getting agitated',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q40A',
                    text: 'I was worried about situations in which I might panic and make a fool of myself',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q41A',
                    text: 'I experienced trembling (eg, in the hands)',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
                {
                    id: 'Q42A',
                    text: 'I found it difficult to work up the initiative to do things',
                    options: [
                        { id: 0, text: 'Did not apply to me at all' },
                        { id: 1, text: 'Applied to me to some degree, or some of the time' },
                        { id: 2, text: 'Applied to me to a considerable degree, or a good part of time' },
                        { id: 3, text: 'Applied to me very much, or most of the time' },
                    ],
                },
            ],
            responses: {},
        };
    },

    methods: {
        
        submitSurvey() {
            
            axios
                .post("/api/dass42", this.responses)
                .then((response) => {})
                .catch((error) => {
                    console.error(error);
                    Toast.fire({
                        icon: "warning",
                        title: "Please fix the issues",
                    });
                });
        },
    },
};
</script>
