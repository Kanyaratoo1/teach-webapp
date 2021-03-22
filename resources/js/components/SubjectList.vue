<template>
    <div class="card-body">
        <table class="table table-striped table-borderless">
            <thead>
                <tr>
                    <th>#</th>
                    <th>รหัสวิชา</th>
                    <th>หัวข้อ</th>
                    <th>อาจาร์ที่สอน</th>
                    <th>วันเวลาที่สอน</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="i in subjects" :key="i.id">
                    <td>{{ i.id }}</td>
                    <td>{{ i.subject_id }}</td>
                    <td>{{ i.subject_title }}</td>
                    <td>{{ i.teach_id.user_id.first_name +' '+ i.teach_id.user_id.last_name}}</td>
                    <td>{{ i.on_date +' '+ i.on_time}}</td>
                    <td>
                        <a :href="'subjects/'+i.id" type="button" class="btn btn-sm btn-danger">
                            <i class="fas fa-edit"></i>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>
<script>
export default {
    name: 'SubjectsList',
    props: [ 'subjects' ]
}
</script>
